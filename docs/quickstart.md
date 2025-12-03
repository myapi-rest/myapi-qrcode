# Quickstart — QR Code API

This API lets you generate customized QR codes with a single HTTP call.

---

## Generate a QR code

```bash
curl --location 'https://api.myapi.rest/api/qrcode/generate'   --header 'Content-Type: application/json'   --header 'Authorization: Bearer <API_KEY>'   --data '{
    "data": "https://marquis.it.com",
    "output_format": "PNG",
    "pixels_per_module": 20,
    "margin": 0,
    "ecc_level": "H",
    "dark_color_hex": "#000000",
    "light_color_hex": "#FFFFFF",
    "draw_quiet_zones": true,
    "image_base64": "",
    "logo_size_percent": 20
  }'
```

### Sample response

```json
{
  "id": 5,
  "qrcode": "<BASE_64_DATA>"
}
```
