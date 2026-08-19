#!/bin/bash
# Sep 1 — Ransomware Recovery post
export PATH="/usr/local/bin:/usr/bin:/bin"
/usr/bin/python3 /Users/michaelrodriguez/Git_Projects/powertech-groupv2/scripts/publish-blog-post.py \
  "blog-video-verification-alarm-chicago" \
  "blog-ransomware-recovery-chicago" \
  "navy" \
  "Cyber Security" \
  "September 2026" \
  "Ransomware Hit Our Client at 2am. Here's What Happened Next — and How You Can Avoid It." \
  "Ransomware attacks don't just encrypt your files — they shut down your business. Here's how Chicago companies can prepare before it hits and respond effectively if it does." \
  >> /tmp/ptg-publish.log 2>&1
