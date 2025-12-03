using System;
using System.Net.Http;
using System.Net.Http.Json;
using System.Threading.Tasks;

class Program
{
    static async Task Main()
    {
        using var client = new HttpClient();
        client.DefaultRequestHeaders.Add("Authorization", "Bearer <API_KEY>");

        var payload = new
        {
            data = "https://marquis.it.com",
            output_format = "PNG",
            pixels_per_module = 20,
            margin = 0,
            ecc_level = "H",
            dark_color_hex = "#000000",
            light_color_hex = "#FFFFFF",
            draw_quiet_zones = true,
            image_base64 = "",
            logo_size_percent = 20
        };

        var response = await client.PostAsJsonAsync(
            "https://api.myapi.rest/api/qrcode/generate",
            payload);

        Console.WriteLine(await response.Content.ReadAsStringAsync());
    }
}
