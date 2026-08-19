#!/bin/bash
# Nov 1 — Security Trends 2027 post
export PATH="/usr/local/bin:/usr/bin:/bin"
/usr/bin/python3 /Users/michaelrodriguez/Git_Projects/powertech-groupv2/scripts/publish-blog-post.py \
  "blog-year-end-security-review-chicago" \
  "blog-security-trends-2027-chicago" \
  "navy" \
  "Industry News" \
  "January 2027" \
  "Commercial Security in 2027: The 6 Trends Reshaping How Chicago Businesses Protect Themselves" \
  "From AI-powered threat detection to cloud-unified physical and cyber security, here is what the new year brings and what Chicago businesses should be doing now to get ahead." \
  >> /tmp/ptg-publish.log 2>&1
