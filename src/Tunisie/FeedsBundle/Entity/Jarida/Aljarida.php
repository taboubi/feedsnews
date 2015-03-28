<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


namespace Tunisie\FeedsBundle\Entity\Jarida;



class Aljarida
{
    protected $item ;
    protected $html ;
    protected $url;
    protected $url_2;
    protected $pages;
    protected $em;
    protected $proceed = true;
    
    public function __construct($em) {
        $this->url = 'http://www.aljarida.com.tn/%D8%A7%D9%84%D9%88%D8%B7%D9%86%D9%8A%D8%A9';
        $this->url_2 = 'http://www.aljarida.com.tn/%D8%A7%D9%84%D9%88%D8%B7%D9%86%D9%8A%D8%A9/page-1';
        $this->em = $em;
        
        $html1 = file_get_contents($this->url);
        $this->getPages($html1);
        if($this->proceed){
            $html2 = file_get_contents($this->url_2);
            $this->getPages($html2);
        }
        
        
    }
    public function getImage(){

    }
    
    public function getPages($html){
        if(!$this->proceed){
            return;
        }
        preg_match_all('/<h2 class="contentheading">(.*?)<\/h2>/s', $html, $matches);  
        foreach($matches[0] as $dh){
            if($this->proceed){
            $doc = new \DOMDocument();
                $doc->loadHTML($dh);
                $links = $doc->getElementsByTagName('a');

                foreach($links as $link) {   
                    $a = 'http://www.aljarida.com.tn'.utf8_decode($link->getAttribute('href'));
                    $html = $this->execCurl($a) ;
                    preg_match('/<meta property="og:image" content="(.*?)"\/>/', $html, $matches);
                    $image = $matches[1] ;

                    preg_match('/<meta property="og:title" content="(.*?)"\/>/', $html, $matches);
                    $title = $matches[1];
                    preg_match_all('/<div class="content_article">(.*?)<div class="cmp_buttons_container"/s', $html, $matches); 
                    $description = strip_tags($matches[0][0],'<p><br>');

                    $slug = $this->url_slug($title, array('transliterate' => true), 'arabe');
                    $articleFound = $this->em
                                ->getRepository('TunisieFeedsBundle:Article')
                                ->findOneBy(array('slug' => $slug));
                    if($articleFound){
                        $this->proceed = false;
                        break;
                    }

                    $this->pages[] = array('image' => $image,'title' => $title, 'description' => $description, 'slug'=>$slug) ;

                }
            
            }else{
                break;
            }
            
        }
        
        
        
        
    }
     public function getDescription(){
         
         preg_match_all('/<div class="videoWithPoster">(.*?)<\/div>/s', $this->html, $matches);  
    }
    
    public function setItem($item){
        
    }
    
    public function execCurl($a){
        
        $c = curl_init();
 
        $header[0] = "Accept: text/xml,application/xml,application/xhtml+xml,";
        $header[0] .= "text/html;q=0.9,text/plain;q=0.8,image/png,*/*;q=0.5";
        $header[] = "Cache-Control: max-age=0";
        $header[] = "Connection: keep-alive";
        $header[] = "Keep-Alive: 300";
        $header[] = "Accept-Charset: utf-8";
        $header[] = "Accept-Language: fr"; // Langue fr
        $header[] = "Pragma: "; // Simule un navigateur

        $useragent = 'Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0'; // Pour se faire passer pour Firefox

        curl_setopt($c, CURLOPT_URL, $a); // l'url à visiter
        curl_setopt($c, CURLOPT_FAILONERROR, 1);
        curl_setopt($c, CURLOPT_FOLLOWLOCATION, 1); // alloue les redirections
        curl_setopt($c, CURLOPT_RETURNTRANSFER,1);
        curl_setopt($c, CURLOPT_HTTPHEADER, $header);
        curl_setopt($c, CURLOPT_PORT, 80); // Pas indispensable, la pluspart des sites ont le port 80 par défaut
        curl_setopt($c, CURLOPT_TIMEOUT, 30); // 30 secondes pour télécharger la page. Si cela est dépassé, cUrl arrêtera
        curl_setopt($c, CURLOPT_USERAGENT, $useragent);

        $html = curl_exec($c);
        
        return $html;
    }
    
    public function getResults(){
        return $this->pages;
    }
    
     public function url_slug($str, $options = array(), $language = null) {
        // Make sure string is in UTF-8 and strip invalid UTF-8 characters
        if ($language == 'arabe') {
            $str = mb_convert_encoding((string) $str, 'UTF-8', mb_list_encodings());

            $defaults = array(
                'delimiter' => '-',
                'limit' => null,
                'lowercase' => true,
                'replacements' => array(),
                'transliterate' => false,
            );

            // Merge options
            $options = array_merge($defaults, $options);

            $char_map = array(
                // Latin
                'À' => 'A', 'Á' => 'A', 'Â' => 'A', 'Ã' => 'A', 'Ä' => 'A', 'Å' => 'A', 'Æ' => 'AE', 'Ç' => 'C',
                'È' => 'E', 'É' => 'E', 'Ê' => 'E', 'Ë' => 'E', 'Ì' => 'I', 'Í' => 'I', 'Î' => 'I', 'Ï' => 'I',
                'Ð' => 'D', 'Ñ' => 'N', 'Ò' => 'O', 'Ó' => 'O', 'Ô' => 'O', 'Õ' => 'O', 'Ö' => 'O', 'Ő' => 'O',
                'Ø' => 'O', 'Ù' => 'U', 'Ú' => 'U', 'Û' => 'U', 'Ü' => 'U', 'Ű' => 'U', 'Ý' => 'Y', 'Þ' => 'TH',
                'ß' => 'ss',
                'à' => 'a', 'á' => 'a', 'â' => 'a', 'ã' => 'a', 'ä' => 'a', 'å' => 'a', 'æ' => 'ae', 'ç' => 'c',
                'è' => 'e', 'é' => 'e', 'ê' => 'e', 'ë' => 'e', 'ì' => 'i', 'í' => 'i', 'î' => 'i', 'ï' => 'i',
                'ð' => 'd', 'ñ' => 'n', 'ò' => 'o', 'ó' => 'o', 'ô' => 'o', 'õ' => 'o', 'ö' => 'o', 'ő' => 'o',
                'ø' => 'o', 'ù' => 'u', 'ú' => 'u', 'û' => 'u', 'ü' => 'u', 'ű' => 'u', 'ý' => 'y', 'þ' => 'th',
                'ÿ' => 'y',
                // Latin symbols
                '©' => '(c)',
                // Greek
                'Α' => 'A', 'Β' => 'B', 'Γ' => 'G', 'Δ' => 'D', 'Ε' => 'E', 'Ζ' => 'Z', 'Η' => 'H', 'Θ' => '8',
                'Ι' => 'I', 'Κ' => 'K', 'Λ' => 'L', 'Μ' => 'M', 'Ν' => 'N', 'Ξ' => '3', 'Ο' => 'O', 'Π' => 'P',
                'Ρ' => 'R', 'Σ' => 'S', 'Τ' => 'T', 'Υ' => 'Y', 'Φ' => 'F', 'Χ' => 'X', 'Ψ' => 'PS', 'Ω' => 'W',
                'Ά' => 'A', 'Έ' => 'E', 'Ί' => 'I', 'Ό' => 'O', 'Ύ' => 'Y', 'Ή' => 'H', 'Ώ' => 'W', 'Ϊ' => 'I',
                'Ϋ' => 'Y',
                'α' => 'a', 'β' => 'b', 'γ' => 'g', 'δ' => 'd', 'ε' => 'e', 'ζ' => 'z', 'η' => 'h', 'θ' => '8',
                'ι' => 'i', 'κ' => 'k', 'λ' => 'l', 'μ' => 'm', 'ν' => 'n', 'ξ' => '3', 'ο' => 'o', 'π' => 'p',
                'ρ' => 'r', 'σ' => 's', 'τ' => 't', 'υ' => 'y', 'φ' => 'f', 'χ' => 'x', 'ψ' => 'ps', 'ω' => 'w',
                'ά' => 'a', 'έ' => 'e', 'ί' => 'i', 'ό' => 'o', 'ύ' => 'y', 'ή' => 'h', 'ώ' => 'w', 'ς' => 's',
                'ϊ' => 'i', 'ΰ' => 'y', 'ϋ' => 'y', 'ΐ' => 'i',
                // Turkish
                'Ş' => 'S', 'İ' => 'I', 'Ç' => 'C', 'Ü' => 'U', 'Ö' => 'O', 'Ğ' => 'G',
                'ş' => 's', 'ı' => 'i', 'ç' => 'c', 'ü' => 'u', 'ö' => 'o', 'ğ' => 'g',
                // Russian
                'А' => 'A', 'Б' => 'B', 'В' => 'V', 'Г' => 'G', 'Д' => 'D', 'Е' => 'E', 'Ё' => 'Yo', 'Ж' => 'Zh',
                'З' => 'Z', 'И' => 'I', 'Й' => 'J', 'К' => 'K', 'Л' => 'L', 'М' => 'M', 'Н' => 'N', 'О' => 'O',
                'П' => 'P', 'Р' => 'R', 'С' => 'S', 'Т' => 'T', 'У' => 'U', 'Ф' => 'F', 'Х' => 'H', 'Ц' => 'C',
                'Ч' => 'Ch', 'Ш' => 'Sh', 'Щ' => 'Sh', 'Ъ' => '', 'Ы' => 'Y', 'Ь' => '', 'Э' => 'E', 'Ю' => 'Yu',
                'Я' => 'Ya',
                'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'yo', 'ж' => 'zh',
                'з' => 'z', 'и' => 'i', 'й' => 'j', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o',
                'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't', 'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'c',
                'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sh', 'ъ' => '', 'ы' => 'y', 'ь' => '', 'э' => 'e', 'ю' => 'yu',
                'я' => 'ya',
                // Ukrainian
                'Є' => 'Ye', 'І' => 'I', 'Ї' => 'Yi', 'Ґ' => 'G',
                'є' => 'ye', 'і' => 'i', 'ї' => 'yi', 'ґ' => 'g',
                // Czech
                'Č' => 'C', 'Ď' => 'D', 'Ě' => 'E', 'Ň' => 'N', 'Ř' => 'R', 'Š' => 'S', 'Ť' => 'T', 'Ů' => 'U',
                'Ž' => 'Z',
                'č' => 'c', 'ď' => 'd', 'ě' => 'e', 'ň' => 'n', 'ř' => 'r', 'š' => 's', 'ť' => 't', 'ů' => 'u',
                'ž' => 'z',
                // Polish
                'Ą' => 'A', 'Ć' => 'C', 'Ę' => 'e', 'Ł' => 'L', 'Ń' => 'N', 'Ó' => 'o', 'Ś' => 'S', 'Ź' => 'Z',
                'Ż' => 'Z',
                'ą' => 'a', 'ć' => 'c', 'ę' => 'e', 'ł' => 'l', 'ń' => 'n', 'ó' => 'o', 'ś' => 's', 'ź' => 'z',
                'ż' => 'z',
                // Latvian
                'Ā' => 'A', 'Č' => 'C', 'Ē' => 'E', 'Ģ' => 'G', 'Ī' => 'i', 'Ķ' => 'k', 'Ļ' => 'L', 'Ņ' => 'N',
                'Š' => 'S', 'Ū' => 'u', 'Ž' => 'Z',
                'ā' => 'a', 'č' => 'c', 'ē' => 'e', 'ģ' => 'g', 'ī' => 'i', 'ķ' => 'k', 'ļ' => 'l', 'ņ' => 'n',
                'š' => 's', 'ū' => 'u', 'ž' => 'z'
            );

            // Make custom replacements
            $str = preg_replace(array_keys($options['replacements']), $options['replacements'], $str);

            // Transliterate characters to ASCII
            if ($options['transliterate']) {
                $str = str_replace(array_keys($char_map), $char_map, $str);
            }

            // Replace non-alphanumeric characters with our delimiter
            $str = preg_replace('/[^\p{L}\p{Nd}]+/u', $options['delimiter'], $str);

            // Remove duplicate delimiters
            $str = preg_replace('/(' . preg_quote($options['delimiter'], '/') . '){2,}/', '$1', $str);

            // Truncate slug to max. characters
            $str = mb_substr($str, 0, ($options['limit'] ? $options['limit'] : mb_strlen($str, 'UTF-8')), 'UTF-8');

            // Remove delimiter from ends
            $str = trim($str, $options['delimiter']);

            return $options['lowercase'] ? mb_strtolower($str, 'UTF-8') : $str;
        } else {
            return Transliterator::transliterate($str, '-');
        }
    }
    
}
