#!/usr/bin/env bash
set -euo pipefail

SEARCH_DIR="${1:-src}"

grep -rl '\\GuzzleHttp\\json_encode(\|\\GuzzleHttp\\json_decode(' "$SEARCH_DIR" --include="*.php" 2>/dev/null | while read -r file; do
    echo "Fixing: $file"
    sed -i \
        -e 's/\\GuzzleHttp\\json_encode(/json_encode(/g' \
        -e 's/\\GuzzleHttp\\json_decode(/json_decode(/g' \
        "$file"
done

echo "Fertig."