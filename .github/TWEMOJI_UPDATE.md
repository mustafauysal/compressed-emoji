# Twemoji Update Workflow

This document explains how the automated Twemoji update workflow works and how to use it.

## Overview

The `update-twemoji.yml` workflow automatically checks for new Twemoji releases from [jdecked/twemoji](https://github.com/jdecked/twemoji/) and creates a pull request with optimized emoji assets.

## How It Works

1. **Version Check**: The workflow reads `.twemoji-version` to check the current version
2. **Fetch Latest**: Queries the GitHub API for the latest Twemoji release
3. **Download**: Clones the Twemoji repository at the specific release tag
4. **Optimize SVG**: Processes all SVG files using SVGO with multipass optimization
5. **Optimize PNG**: Processes all PNG files using:
   - `pngquant` for lossy compression (quality 80-95)
   - `optipng` for lossless optimization
6. **Update Repository**: Replaces old emoji files with optimized versions
7. **Create PR**: Opens a pull request with statistics and version information

## Triggering the Workflow

### Automatic (Scheduled)
The workflow runs automatically on the 1st of each month at 00:00 UTC.

### Manual Trigger
1. Go to the Actions tab in the repository
2. Select "Update Twemoji" workflow
3. Click "Run workflow"
4. Select the branch (usually `master`)
5. Click "Run workflow" button

## What Gets Updated

- `images/svg/*.svg` - All SVG emoji files
- `images/png/*.png` - All PNG emoji files (72x72 resolution)
- `.twemoji-version` - Version tracking file

## After the Workflow Runs

1. The workflow creates a new branch named `update-twemoji-{version}`
2. A pull request is created with:
   - Title: "Update Twemoji to {version}"
   - Statistics about file counts and sizes
   - Link to the Twemoji release
3. Review the pull request:
   - Check that file counts are reasonable
   - Verify no files are missing
   - Check that sizes are smaller than before
4. Merge the PR if everything looks good

## Troubleshooting

### Workflow Fails on "Fetch latest Twemoji release"
- Check if jdecked/twemoji repository is accessible
- Verify the GitHub API is working

### Workflow Fails on "Optimize SVG files"
- Check if SVGO installation succeeded
- Verify SVG files exist in the cloned repository
- Check the directory structure detection

### Workflow Fails on "Optimize PNG files"
- Check if pngquant and optipng installed correctly
- Verify PNG files exist in the cloned repository
- Check the directory structure detection

### No PR Created
- Check if the version is already up to date (see workflow logs)
- Verify the workflow has permissions to create PRs
- Check if there were any errors in previous steps

## Configuration

The workflow can be customized by editing `.github/workflows/update-twemoji.yml`:

- **Schedule**: Modify the `cron` expression to change frequency
- **PNG Quality**: Adjust `--quality=80-95` in pngquant command
- **Optimization Level**: Change `-o2` to `-o1` through `-o7` for optipng
- **SVGO Options**: Add more flags to the svgo command

## Version Tracking

The `.twemoji-version` file contains the current Twemoji version tag (e.g., `v15.0.0`). The workflow skips updates if this version matches the latest release.

## Notes

- The workflow optimizes files to balance quality and size
- SVG files are optimized with SVGO's multipass option for maximum compression
- PNG files undergo both lossy and lossless optimization
- The workflow handles various Twemoji repository directory structures
- All file operations are safe and handle empty directories gracefully
