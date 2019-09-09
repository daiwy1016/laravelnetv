<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class TestController extends Controller
{


    public function index()
    {
        /*echo "ok";

        $d=[
            'a'=>'1',
            'b'=>['2','3'],
            'c'=>[
                'd'=>'4',
                'e'=>'5'
            ]

        ];
        echo  http_build_query($d);
        exit;*/




        $client = new \GuzzleHttp\Client();
        //var_dump($client);
        /* $result=$client->get('http://laravelnetv.app/api/user');
         echo $result->getBody();*/
        $res = $client->request('GET', 'http://laravelnetv.app/api/user', [
            'headers' => ['Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImQ1MjZmNDU1MjYyZGFhMDRiMDQ0ODMzZjkwNmE4YjIzMGMzZmU0YTUwYjNiN2EyNDEyNTQzY2M3OTE3OWI2MWE1OWY2MmExZmY2Y2YxYmE3In0.eyJhdWQiOiI0IiwianRpIjoiZDUyNmY0NTUyNjJkYWEwNGIwNDQ4MzNmOTA2YThiMjMwYzNmZTRhNTBiM2I3YTI0MTI1NDNjYzc5MTc5YjYxYTU5ZjYyYTFmZjZjZjFiYTciLCJpYXQiOjE0OTk3NDE5MjgsIm5iZiI6MTQ5OTc0MTkyOCwiZXhwIjoxNTAwMDAxMTI4LCJzdWIiOiIyIiwic2NvcGVzIjpbXX0.Usuw4G9AkwVn2Ht9lkpNkgRtAHQoFA7DGNaLUjR7PmixlgtkF5k-BGd_qBNSlcVV3p0ULYHdPdSFodRzkdBomTbLerhBgUGA-ugRI37_k-Gmoh-XsTixIlWY6uUL-KLdA7Pv6UtUu2_ntCRkPt7-QG0_PGx6V6kDsnWltq4W9BXZZwuTLoiSqioS_n2vzPFw0gcnHKWbP0vOhuI_hWoYKOSb81Wf_ih3-n9Gq56XI_xLD6PdkOPLWgaO7wWRUWTFEZkz_4_MOZZBUhO7dxPZD8FGhjAp0Rmpq7-STCC9JJbijVk513QAEnGH7WlgiN_E_kJGvQSlk2N6EEZpiT3irgINICzOZZftVzoIIP7Yv12vI0KCvelWo1BlS4CxZzAKIkXyh_gcm7cbwfz4G56A3YQTNwFhIqPTRhDbwPYBQUQ2vMEsaKs3MMmVCvZnbD48D9rRDn6PrElGyY_Ojl27AZKwG5MI3DcAMOoZx-42ehgGR-F_x6VyL8qzdsEd70fxU9HMOVdbS3owk288HmMcEbu_OyzHALHEvd6WkbPcsvONTzJ9TjyhYmF1YIv3cuJlhE7xtNVcdPCiyng6YJUdNNovhEmHr1R5StJaDR855fWMsuchJA2ZGYvwihnU8aZlHUW_ooVYknoiKWUr_ystZEjqVfBjh9_m7HTQPw_wOHI']
        ]);
        echo $res->getBody();

    }

}

