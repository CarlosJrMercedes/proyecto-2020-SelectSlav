<?php

    require "../models/indexModel.php";
    $objIndex = new IndexModel();
    if(isset($_POST["muni"])!= null){
        $muni = $_POST["muni"];
        if($muni == "si"){
            $dept=$_POST["dept"];
           $data = $objIndex->getMunicipios($dept);
            ?>
                    <option value="0" selected><h6>SELECCIONE</h6></option>
                    <?php
                        foreach($data as $dept):
                    ?>
                        <option value="<?php echo $dept["id_munici"];?>"><?php echo $dept["nombre"];?></option>
                    <?php
                        endforeach;
                    ?>
                
            <?php           
        }
    }
    if(isset($_POST["cV"])!= null){
        $cV = $_POST["cV"];
        if($cV == "si"){
            $muni=$_POST["muni"];
           $data = $objIndex->getCv($muni);
            ?>
                    <option value="0" selected><h6>SELECCIONE</h6></option>
                    <?php
                        foreach($data as $dept):
                    ?>
                        <option value="<?php echo $dept["id_centro"];?>"><?php echo $dept["nombre"];?></option>
                    <?php
                        endforeach;
                    ?>
                
            <?php           
        }
    }


    if(isset($_POST["junta"])!= null){
        $junta = $_POST["junta"];
        if($junta == "si"){
            $cV=$_POST["cV"];
           $data = $objIndex->getJr($cV);
            ?>
                    <option value="0" selected><h6>SELECCIONE</h6></option>
                    <?php
                        foreach($data as $dept):
                    ?>
                        <option value="<?php echo $dept["id_junta"];?>"><?php echo $dept["nombre"];?></option>
                    <?php
                        endforeach;
                    ?>
                
            <?php           
        }
    }

    if(isset($_POST["verificarDui"]) != null){
        $dui = $_POST["dui"];

        $duiVal = $objIndex->verificarDui($dui);
        echo  $duiVal;
        // var_dump($duiVal);
        // die();
        
    }

    if(isset($_POST["insertVoto"]) != null){
        $dui = $_POST["dui"];
        $muni = $_POST["muni"];
        $junta = $_POST["junta"];
        $partido = $_POST["idPartido"];

        $result = $objIndex->insertVoto($dui,$muni,$junta,$partido);
        echo $result;
    }

?>