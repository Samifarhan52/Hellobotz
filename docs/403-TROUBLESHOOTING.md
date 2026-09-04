# 403 on /locations/
1. Confirm /locations/index.php exists
2. Permissions dirs 755 files 644
3. DirectoryIndex index.php
4. No Deny rules on locations
5. Use /locations/ not /Locations/ (301 provided)
6. Apache: Require all granted + AllowOverride All
Do NOT enable directory listing as the fix.
