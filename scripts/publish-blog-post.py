#!/usr/bin/env python3
"""
PTG Blog Post Scheduler
Publishes a pre-written scheduled blog post to blog.html and pushes to GitHub.

Usage:
  python3 publish-blog-post.py <old_slug> <new_slug> <bar_color> <category> <month_year> <title> <description>

bar_color: 'red' or 'navy'
"""

import sys
import os
import subprocess

REPO = '/Users/michaelrodriguez/Git_Projects/powertech-groupv2'
BLOG = os.path.join(REPO, 'blog.html')

GRID_OPEN = '    <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(280px,1fr));gap:32px;">'

ARTICLE_BASE = (
    'background:#fff;border:1px solid #eee;border-radius:12px;overflow:hidden;'
    'box-shadow:0 2px 12px rgba(0,0,0,0.05);cursor:pointer;'
    'transition:box-shadow 0.2s,transform 0.2s;"'
)

NEW_BADGE = (
    '        <span style="position:absolute;top:16px;right:16px;background:var(--red);'
    'color:#fff;font-size:0.65rem;font-weight:800;text-transform:uppercase;'
    'letter-spacing:0.1em;padding:4px 10px;border-radius:4px;">'
    '<i class="fas fa-bolt" style="margin-right:4px;"></i>New</span>\n'
)

HOVER = (
    " onmouseover=\"this.style.transform='translateY(-3px)';"
    "this.style.boxShadow='0 8px 24px rgba(0,0,0,0.1)'\""
    " onmouseout=\"this.style.transform='';"
    "this.style.boxShadow='0 2px 12px rgba(0,0,0,0.05)'\""
)


def make_card(slug, bar_color, category, month_year, title, description, is_new=False):
    pos = 'position:relative;' if is_new else ''
    badge = NEW_BADGE if is_new else ''
    bar_var = 'var(--red)' if bar_color == 'red' else 'var(--navy)'
    return (
        f'      <article style="{pos}{ARTICLE_BASE} onclick="location.href=\'{slug}\'"{HOVER}>\n'
        f'{badge}'
        f'        <div style="background:{bar_var};height:6px;"></div>\n'
        f'        <div style="padding:28px 24px;">\n'
        f'          <div style="display:flex;align-items:center;gap:12px;margin-bottom:10px;">\n'
        f'            <span style="font-size:0.72rem;text-transform:uppercase;letter-spacing:0.1em;color:var(--red);font-weight:700;">{category}</span>\n'
        f'            <span style="font-size:0.72rem;color:#999;">{month_year}</span>\n'
        f'          </div>\n'
        f'          <h2 style="font-size:1.2rem;font-weight:700;margin:0 0 12px;line-height:1.35;">{title}</h2>\n'
        f'          <p style="font-size:0.88rem;color:#666;line-height:1.65;margin-bottom:20px;">{description}</p>\n'
        f'          <a href="{slug}" style="color:var(--red);font-size:0.85rem;font-weight:600;">Read More →</a>\n'
        f'        </div>\n'
        f'      </article>'
    )


def main():
    if len(sys.argv) != 8:
        print('Usage: publish-blog-post.py <old_slug> <new_slug> <bar_color> <category> <month_year> <title> <description>')
        sys.exit(1)

    old_slug, new_slug, bar_color, category, month_year, title, description = sys.argv[1:]

    with open(BLOG, 'r') as f:
        content = f.read()

    # Idempotency check — skip if already published (card has no position:relative before it)
    marker = f"location.href='{new_slug}'"
    if marker in content:
        idx = content.index(marker)
        preceding_article = content.rfind('<article', 0, idx)
        if 'position:relative' not in content[preceding_article:idx]:
            print(f'[PTG Publish] {new_slug} already published. Skipping.')
            sys.exit(0)

    # 1. Remove position:relative from the old newest article
    old_rel = f'<article style="position:relative;{ARTICLE_BASE} onclick="location.href=\'{old_slug}\''
    old_flat = f'<article style="{ARTICLE_BASE} onclick="location.href=\'{old_slug}\''
    if old_rel in content:
        content = content.replace(old_rel, old_flat, 1)

    # 2. Remove the New badge (only once — from the article we just demoted)
    content = content.replace(NEW_BADGE, '', 1)

    # 3. Build and insert the new card
    new_card = make_card(new_slug, bar_color, category, month_year, title, description, is_new=True)
    content = content.replace(GRID_OPEN, GRID_OPEN + '\n\n' + new_card + '\n', 1)

    with open(BLOG, 'w') as f:
        f.write(content)

    # 4. Git: pull, add, commit, push
    os.chdir(REPO)
    subprocess.run(['git', 'pull', '--rebase'], check=True)
    subprocess.run(['git', 'add', 'blog.html'], check=True)
    commit_msg = (
        f'Publish scheduled post: {new_slug}\n\n'
        f'Co-Authored-By: Claude Sonnet 4.6 <noreply@anthropic.com>'
    )
    subprocess.run(['git', 'commit', '-m', commit_msg], check=True)
    subprocess.run(['git', 'push', 'origin', 'main'], check=True)
    print(f'[PTG Publish] Successfully published {new_slug}')


if __name__ == '__main__':
    main()
