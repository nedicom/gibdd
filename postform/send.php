    <?php
    $myphone = '01233215678';

    if (isset($_POST['myphone'])) {
        $myphone = $_POST['myphone'];
    }

    $env = parse_ini_file('.env');

    /* $sub = 'Заявка с сайта https://gibdd.nedicom.ru/ - пьяный руль';

    $conn = mysqli_connect($env['DB_MYSQLIHOST'], $env['DB_MYSQLINAME'], $env['DB_MYSQLIPASS'], $env['DB_MYSQLINAME']);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO leads (source, description, phone, lawyer, created_at, responsible, status, service)
        VALUES ('https://gibdd.nedicom.ru/', '$sub', '$myphone', 80, CURRENT_TIME(), 80, 'поступил', 11)"; //82 - данил, 11 - консультация
    $conn->query($sql);


    ini_set('short_open_tag', 'On');
    
    header('Refresh: 3; URL=index.html');
*/


    $url = "https://crm.nedicom.ru/leads/addfromreq";

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array('Accept: application/json', 'Content-Type: application/json'));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    

    $data = [
        "token" => $env['NEDICOM_CRM_TOKEN'],
        "lawyer" => "2",
        "responsible" => "2"
    ];

    $json_data = json_encode($data);

    curl_setopt($curl, CURLOPT_POSTFIELDS, $json_data);

    $resp = curl_exec($curl);
    curl_close($curl);

    echo $resp;


    ?>
    <!--
    <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
    <html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="refresh" content="3; url=index.html">
        <title>Спасибо! Письмо отправлено юристу! Скоро мы свяжемся с вами! </title>
        <meta name="generator">
        <script type="text/javascript">
            setTimeout('location.replace("https://gibdd.nedicom.ru/")', 3000);
            /*Изменить текущий адрес страницы через 3 секунды (3000 миллисекунд)*/
        </script>
    </head>

    <body>
        <h1>Спасибо! Мы свяжемся с вами! </h1>
    </body>

    </html>
-->