#!/bin/bash
# Sep 15 — Fire Sprinkler post
export PATH="/usr/local/bin:/usr/bin:/bin"
/usr/bin/python3 /Users/michaelrodriguez/Git_Projects/powertech-groupv2/scripts/publish-blog-post.py \
  "blog-ransomware-recovery-chicago" \
  "blog-fire-sprinkler-chicago" \
  "red" \
  "Fire Protection" \
  "October 2026" \
  "Commercial Fire Sprinkler Systems in Chicago: Code Requirements, Inspections, and When You Must Upgrade" \
  "Illinois fire code requires sprinkler systems in most commercial buildings. Here is what triggers the requirement, what annual inspections must cover, and when an upgrade becomes legally mandatory." \
  >> /tmp/ptg-publish.log 2>&1
