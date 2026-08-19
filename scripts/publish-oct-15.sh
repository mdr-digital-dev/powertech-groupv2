#!/bin/bash
# Oct 15 — Year-End Review post
export PATH="/usr/local/bin:/usr/bin:/bin"
/usr/bin/python3 /Users/michaelrodriguez/Git_Projects/powertech-groupv2/scripts/publish-blog-post.py \
  "blog-holiday-security-chicago" \
  "blog-year-end-security-review-chicago" \
  "red" \
  "IT Services" \
  "December 2026" \
  "The Year-End IT and Security Checklist Every Chicago Business Should Run Before January" \
  "December is the right time to audit your security systems, patch IT infrastructure, and close compliance gaps. Here is the 12-point checklist we run with our Chicago clients every year." \
  >> /tmp/ptg-publish.log 2>&1
