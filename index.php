<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=1.0">
        <title>Ubud Center</title>
        <link media="all" type="text/css" rel="stylesheet" href="./css/header.css">
        <link media="all" type="text/css" rel="stylesheet" href="./css/footer.css">
        <link rel="stylesheet" type="text/css" href="./css/index_content.css">
    </head>
    <body style="margin:0 auto; background: #f7f7f7; margin-top: 20px; width: 100%">
         <?php include_once("./templates/header.php"); ?>
        
    <div class="container">
            <div class="box_informasi">
                <table cellspacing="5px">
                    <tr>
                        <td>Looking For Acommodation in Ubud</td>
                        <td>Looking For Something to do in Ubud</td>
                    </tr>
                    <tr>
                        <td><img src="./images/tabel1.jpg"></td>
                        <td><img src="./images/tabel2.jpg"></td>
                    </tr>
                    <tr>
                        <td style="background:lightblue; color:black; font-size: 21px; text-align: center; padding: 0.5em;">Check in <input type="date" name="tgl" style="width: 23%"> Night <SELECT Name="Jurusan" style="width: 12%;">
                                    <OPTION VALUE="1">1
                                    <OPTION VALUE="2">2
                                    <OPTION VALUE="3">3
                                    <OPTION VALUE="4">4
                                    <OPTION VALUE="5">5
                                    </SELECT>
                                    <button type="button" style="background: green; color: white; width: 17%; height: 36px;">Book Now</button>
                        </td>
                        <td style="background:lightblue; color:black; font-size: 21px; text-align: center; padding: 0.5em;"><input type="text" name="act" placeholder="keyword" style="width: 50%;"> <button type="button" style="background: green; color: white; height: 36px;">Search</button></td>
                    </tr>
                    <tr>
                        <td>Looking For Something to See in Ubud</td>
                        <td>Ubud E-Commerce Finder</td>

                    </tr>
                    <tr>
                        <td><img src="./images/tabel3.jpg"></td>
                        <td><img src="./images/tabel4.jpg"></td>
                    </tr>
                    <tr>
                        <td style="background:lightblue; color:black; font-size: 21px; text-align: center; padding: 0.5em;"><input type="text" name="act" placeholder="keyword" style="width: 50%;"> <button type="button" style="background: green; color: white; height: 36px;">Search</button>
                        </td>
                        <td style="background:lightblue; color:black; font-size: 21px; text-align: center; padding: 0.5em;"><input type="text" name="act" placeholder="keyword" style="width: 50%;"> <button type="button" style="background: green; color: white; height: 36px;">Search</button></td>
                    </tr>
                    <tr>
                        <td colspan="2">Events and Promotions</td>
                    </tr>
                    <tr>
                        <td colspan="2"><img src="./images/tabel1.jpg" style="width: 100%; height: 325px"></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="color:black; font-size: 18px;">
                            Ubud-Center - One just can't get enough of her
                        </td>
                    </tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr>
                        <td colspan="2" style="color:black; font-size: 18px; text-align: left;">Ubud is the very heart of Bali - both geographically and metaphorically – Bali’s cultural capital where art and craft intermingle and all manner of eccentrics, autocrats, hippies, bohemians, altruists, gourmets, Bali royalty, and of course, artists form an intriguing amalgamation that feels so much more connected to the local culture than in resort enclaves elsewhere in Bali.</td>
                    </tr>
                    <tr>
                        <td colspan="2"><button type="button" style="background: green; color: white; height: 36px; width: 20%; float: right;">More</button></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align: center; color: blue;">The Best Online Tourism Guide for Ubud, Bali</td>
                    </tr>
                </table>
            </div>
        </div>
    <?php include_once("./templates/footer.php"); ?>
    </body>
</html>