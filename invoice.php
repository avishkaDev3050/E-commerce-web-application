<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neo Mobile || Invoice</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
    <div class="container p-2">
        <div class="row">

            <div class="invoice-header">
                <h1 class="text-center">Neo Mobile</h1>
                <h1>Invoice</h1>
                <div class="d-flex justify-content-between">
                    <p>
                        212/2 Raja Veediya, <br>
                        Kandy <br>
                        01 / 05 / 2024
                        To : avishkapriyasoma@gmail.com
                    </p>
                    <div>
                        <p>
                            Reference : 000927364
                        </p>
                    <div class="col-1">
                        <img src="resource/logo.webp" alt="logo" style="width: 100px;">
                    </div>
                    </div>
                </div>
            </div>

            <div class="mt-5">

                <table class="table border border-1 border-black">
                    <thead>
                      <tr class="border border-3 border-black">
                        <th scope="col">Pridyc Idt</th>
                        <th scope="col">Pridyct</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Price</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="border border-3 border-black">
                        <td>0001212u</td>
                        <td>Apple iphone 11</td>
                        <td>1</td>
                        <td>100 000</td>
                      </tr>
                      <tr class="border border-3 border-black">
                        <td>0001212u</td>
                        <td>Apple iphone 11</td>
                        <td>1</td>
                        <td>100 000</td>
                      </tr>
                      <tr class="border border-3 border-black">
                        <td>0001212u</td>
                        <td>Apple iphone 11</td>
                        <td>1</td>
                        <td>100 000</td>
                      </tr>
                    </tbody>
                  </table>

            </div>

            <div class="mt-4 d-flex justify-content-between">

                <div>
                    <div class="col-1">
                        <button class="btn text-white fw-bold pointer-event" style="background-color: rgb(92,184,227); width: 200px;;" onclick="printInvoice();">Print</button>
                    </div>
                </div>

                <div>
                    <p class="invoice-footer">
                        <span class="fw-bold">Shipping : </span> Rs   5 000 <br>
                        <span class="fw-bold">Total    : </span> Rs 305 000
                    </p>
                </div>

            </div>

        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>