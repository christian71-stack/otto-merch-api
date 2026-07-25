#!/usr/bin/env bash
set -uo pipefail

SEARCH_DIR="${1:-src}"

if [ ! -d "$SEARCH_DIR" ]; then
    echo "Verzeichnis '$SEARCH_DIR' existiert nicht, überspringe."
    exit 0
fi

MATCHES=$(grep -rl '\\GuzzleHttp\\json_encode(\|\\GuzzleHttp\\json_decode(' "$SEARCH_DIR" --include="*.php" 2>/dev/null || true)

if [ -z "$MATCHES" ]; then
    echo "Keine GuzzleHttp\\json_encode/decode Aufrufe in '$SEARCH_DIR' gefunden."
    exit 0
fi

# BSD sed (macOS) braucht ein Suffix-Argument nach -i, GNU sed nicht
if sed --version >/dev/null 2>&1; then
    SED_INPLACE=(-i)
else
    SED_INPLACE=(-i '')
fi

echo "$MATCHES" | while read -r file; do
    echo "Fixing: $file"
    sed "${SED_INPLACE[@]}" \
        -e 's/\\GuzzleHttp\\json_encode(/json_encode(/g' \
        -e 's/\\GuzzleHttp\\json_decode(/json_decode(/g' \
        "$file"
done

echo "Fertig."