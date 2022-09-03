<?php
# Son bir haftada girilen veriyi filtreleme
$data = $db->query("SELECT * FROM table WHERE eklenme_tarihi BETWEEN NOW() - INTERVAL 7 DAY AND NOW() ORDER BY eklenme_tarihi ASC");

# Son bir ayda girilen veriyi filtreleme
$data = $db->query("SELECT * FROM table WHERE eklenme_tarihi BETWEEN NOW() - INTERVAL 30 DAY AND NOW() ORDER BY eklenme_tarihi ASC");


# Bu filtrelenen verilerin sayısı (Son x günde kaç tane ürün girildi? Sorusunun cevabı)
# rowCount() ifadesi bize satır sayısını söyler.
$data->rowCount();

