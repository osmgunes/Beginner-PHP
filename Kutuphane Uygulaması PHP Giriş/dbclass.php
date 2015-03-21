<?php 

class dbclass { 

        public function __construct($host,$user,$pass,$data){ 
            try { 
             
            $this->baglanti = mysql_select_db($data,mysql_connect($host,$user,$pass)) or die (mysql_error()); 
             
            } catch (Exception $e){ 
                     
                    die($e->getMessage()); 
            } 
             
        } 
         
         
        public function query($sql){ 
             
                try{ 
                     
                     $this->query = mysql_query($sql) or die (mysql_error()); 

        return $this->query; 

                         
                } catch (Exception $e){ 
                     
                        die($e->getMessage()); 
                } 
         
         
        } 
         
         
        public function ekle($tablo,$gelenler){ 
         
            $this->sutun   = '('; 
             
            $this->ekle     = '('; 
                 
                foreach ($gelenler as $this->veri=>$this->deger):    
                 
                    $this->sutun .= $this->veri.',';   
                 
                    $this->deger  = addslashes($this->deger); 
                 
                    $this->ekle  .= "'$this->deger',";   
                 
                endforeach; 
         
        $this->sutun = rtrim($this->sutun , ',').')'; 
         
        $this->ekle  = rtrim($this->ekle, ',').')';      
         
        $this->sorgu = "INSERT INTO $tablo $this->sutun values $this->ekle"; 
     
        return self::query($this->sorgu); 
     
        } 
         
        public function guncelle($tablo, $gelenler, $nereye = NULL) { 
             
            $this->guncelle = "update $tablo set"; 
             
            foreach ($gelenler as $this->set=>$this->deger): 
             
                $this->guncelle  .= " $this->set=";   
                 
                $deger = addslashes($this->deger); 
                 
                $this->guncelle  .= "'$this->deger',";   
             
            endforeach; 
                    $this->guncelle  = rtrim($this->guncelle , ','); 
            if (!empty($nereye)) $this->guncelle  .= " where $nereye"; 
                     
                    return self::query($this->guncelle); 
        } 
         
        public function fetch_all($sql , $diger = false ,$row = array()){ 
                 
        if(!$diger): 
                try { 
         
                $this->getir = mysql_query($sql); 
                 
                } catch (Exception $e){ 
                 
                    die($e->getMessage()); 
                } 
                 
             
                try{ 
                 
                $this->row = $row; 
                 
                    while ($this->row[] = mysql_fetch_assoc($this->getir)): endwhile; 
         
                return $this->row; 
                 
                } catch (Exception $e){ 
                 
                    die('Bir Hata Olustu .. '); # $e->getMessage(); 
                } 
                    else: 
                     
                    $this->sonuc = mysql_fetch_array(mysql_query($sql)) or die (mysql_error()); 
                    return $this->sonuc; 
        endif; 

                                     

                         
             
        } 
         
        function veriler($a){ 
             
            echo '<pre>'; 
                print_r($a); 
            echo '</pre>'; 
             
        } 
         
        function __desctruct() 
        { 
            mysql_close($this->baglanti); 
        } 
             
             
         

} 


?>