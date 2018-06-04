        <?php
            $site_key = '6LfZN1sUAAAAAK7jcj-hw7qI7geqi9X8Q9ma5UMT'; // Diisi dengan site_key API Google reCapthca yang sobat miliki
            $secret_key = '6LfZN1sUAAAAAKSd63jYIfNDKsf6MKTZVl10VMPJ'; // Diisi dengan secret_key API Google reCapthca yang sobat miliki
            
            $komentar=0;
            if (isset($_POST['submit']))
            {
                if(isset($_POST['g-recaptcha-response']))
                {
                    $api_url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . $secret_key . '&response='.$_POST['g-recaptcha-response'];
                    $response = @file_get_contents($api_url);
                    $data = json_decode($response, true);
        
                    if($data['success'])
                    {
                        $comment = $_POST['submit'];
                        // proses penyimpananan dan lain-lain disini
                        $success = "k";
                    }
                    else
                    {
                        $success = false;
                    }
                }
                else
                {
                    $success = false;
                }
            }
        ?>