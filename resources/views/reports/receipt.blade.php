<div id="invoice-POS">
<!-- {{-- Print Section --}} -->
    <div id="printed_content">
        <center id="top">
            <div class="logo">Algie</div>
            <div class="info"></div>
            <h2>Zuniga's Gravel and Sand Trading</h2>
        </center>
    </div>

    <div id="mid">
        <div class="info">
            <h2>Contact Us</h2>
            <p>
                Address: Zone 1, Tandaay, Nabua, Camarines Sur
                Email: zuniga@gmail.com
                Phone: 09919459435
            </p>
        </div>
    </div>

    <!--End of Receipt Mid-->
    <div id="bot">
        <div id="table">
            <table>
                <tr class="tableTitle">
                    <td class="item"><h2>Item</h2></td>
                    <td class="Hours"><h2>QTY</h2></td>
                    <td class="Rate"><h2>Unit</h2></td>
                    <td class="Rate"><h2>Discount</h2></td>
                    <td class="Rate"><h2>Sub Total</h2></td>
                </tr>

                @foreach($order_receipt as $receipt)

                <tr class="service">
                    <td class="tableItem"><p class="itemtext">Mango </p></td>
                    <td class="tableItem"><p class="itemtext"> 5 </p></td>
                    <td class="tableItem"><p class="itemtext"> $20 </p></td>
                    <td class="tableItem"><p class="itemtext"> 0 </p></td>
                    <td class="tableItem"><p class="itemtext"> $100 </p></td>
                </tr>
                @endforeach
                <tr class="tableTitle">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="Rate"><p class="itemtext">Tax</p></td>
                    <td class="Payment"><p class="itemtext">$ 100</p></td>
                </tr>
                <tr class="tableTitle">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="Rate">Total</td>
                    <td class="Payment">
                        <h2>
                            $100
                        </h2>
                    </td>
                </tr>
            </table>
            <div class="legalcopy">
                <p class="legal">
                    <strong>
                        **Thank you for purchasing
                    </strong>
                    <br>
                    The good which are subject to tax, prices includes tax.
                </p>
                <div class="serial-number">
                    Serial:
                    <span class="serial">
                        122334455667788
                    </span>
                    <span>
                        15/05/2022 &nbsp; &nbsp; 00:45
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    #invoice-POS{
        box-shadow: 0 0 1in -0.25in rgb(0, 0, 0.5);
        padding: 2mm;
        margin: 0 auto;
        width: 58mm;
        background: #fff;
    }
    #invoice-POS ::selection {
        background:  #34495e;
        color: #fff;
    }
    #invoice-POS ::-moz-selection{
        background: #34495e;
        color: #fff;
    }
    #invoice-POS h1{
        font-size: 1.5em;
        color: #222;
    }
    #invoice-POS h2{
        font-size: 0.7em;
    }
    #invoice-POS h3{
        font-size: 1.5em;
        font-weight: 300;
        line-height: 2em;
    }
    #invoice-POS p{
        font-size: 0.7em;
        color: #666;
        line-height: 1.2em;
    }
    #invoice-POS #top, #invoice-POS #mid, #invoice-POS #bot{
        border-bottom: 1px solid #eee;
    }
    #invoice-POS #top{
        min-height: 100px;
    }
    #invoice-POS #mid{
        min-height: 80px;
    }
    #invoice-POS #bot{
        min-height: 50px;
    }
    #invoice-POS #top .logo{
        height: 60px;
        width: 60px;
        background-image: url() no-repeat;
        background-size: 60px 60px;
        border-bottom: 50px;
    }
    #invoice-POS #mid .info{
        display: block;
        margin-left: 0;
        text-align: center;
    }
    #invoice-POS .title{
        float: right;
    }
    #invoice-POS .title p{
        text-align: right;
    }
    #invoice-POS table{
        width: 100%;
        border-collapse: collapse;
    }
    #invoice-POS .tableTitle{
        font-size: 0.9em;
        background: #eee;
    }
    #invoice-POS .service{
        border-bottom: 1px solid #eee;
    }
    #invoice-POS .item{
        width: 24mm;
    }
    #invoice-POS .itemtext{
        width: 0.5em;
    }
    #invoice-POS #legalcopy{
        margin-top: 5mm;
        text-align: center;
    }
    .serial-number{
        margin-top: 5mm;
        margin-bottom: 2mm;
        text-align: center;
        font-size: 12px;
    }
    .serial{
        font-size: 10px !important;
    }
</style>



