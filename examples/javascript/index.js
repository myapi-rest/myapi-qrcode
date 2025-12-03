const payload = {
  data: "https://marquis.it.com",
  output_format: "PNG",
  pixels_per_module: 20,
  margin: 0,
  ecc_level: "H",
  dark_color_hex: "#000000",
  light_color_hex: "#FFFFFF",
  draw_quiet_zones: true,
  image_base64: "",
  logo_size_percent: 20
};

fetch("https://api.myapi.rest/api/qrcode/generate", {
  method: "POST",
  headers: {
    "Authorization": "Bearer <API_KEY>",
    "Content-Type": "application/json"
  },
  body: JSON.stringify(payload)
})
  .then(res => res.text())
  .then(console.log)
  .catch(console.error);
