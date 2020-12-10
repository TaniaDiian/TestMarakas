<?php

class Parser
{
   
    public function parseFile($xml){
        if(!empty($xml))
        {
            $items = $xml->channel;
            $array_products = [];

            foreach($items->item as $value){

                $asin = self::getAsin($value->link);
                $url = $value->link;
                $amzn = $value->children('amzn', true);

                $amzn_products = $amzn->products;

                foreach($amzn_products->product as $amzn_product){
                    $amazon_url = $amzn_product->productURL;
                    $product_name = $amzn_product->productHeadline;
                    $amazon_product_summary = $amzn_product->productSummary;
                    $amazon_product_summary_count = strlen($amzn_product->productSummary);
                    $amazon_award = $amzn_product->award;
                    $amazon_award_count = strlen($amzn_product->award);

                    $array_product = [
                        'asin' =>(int)$asin,
                        'url' =>(string)$url,
                        'amazon_url' =>  (string)$amazon_url,
                        'product_name' =>  (string)$product_name,
                        'amazon_product_summary' =>  (string)$amazon_product_summary,
                        'amazon_product_summary_count' => (int)$amazon_product_summary_count,
                        'amazon_award' =>  (string)$amazon_award,
                        'amazon_award_count' => (int)$amazon_award_count,
                    ]; 

                    array_push($array_products, $array_product);
                }
            }
            return $array_products;

        }else{
            exit('File is empty');
        }
    }

    public static function getAsin($link){
        $pieces = explode("/", $link);
        $length = count($pieces);

        $str = $pieces[$length-2];

        preg_match_all('!\d+!', $str, $matches);
        return (int)$matches[0][0];
    }

}
