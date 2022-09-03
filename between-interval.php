<?php
# Son bir haftalık veri
$data = $db->query("SELECT * FROM table WHERE eklenme_tarihi BETWEEN NOW() - INTERVAL 7 DAY AND NOW() ORDER BY eklenme_tarihi ASC");

# Son bir aylık veri
$data = $db->query("SELECT * FROM table WHERE eklenme_tarihi BETWEEN NOW() - INTERVAL 30 DAY AND NOW() ORDER BY eklenme_tarihi ASC");


# Son x günde tabloya kaç adet veri girildiğini göstermek için;
$data->rowCount();

