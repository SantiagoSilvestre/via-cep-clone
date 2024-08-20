<?php

use PHPUnit\Framework\TestCase;
use Santiago\ViaCepCloneTeste\Search;
use PHPUnit\Framework\Attributes\DataProvider;

class SearchTest extends TestCase
{

    #[DataProvider('dadosTeste')]
    public function testGetAddressFromZipcodeDefaultUsage(String $input, array $expect)
    {
        $result = new Search;
        $result = $result->getAddressFromZipcode($input);        

        $this->assertEquals($expect, $result);
    }

    public static function dadosTeste()
    {
        return [
            "Endereço Rua Luísa Damon" => [
                "05795240",
                [
                    'cep' => '05795-240',
                    'logradouro' => 'Rua Luísa Damon',
                    'complemento' => '',
                    'unidade' => '',
                    'bairro' => 'Jardim Rosana',
                    'localidade' => 'São Paulo',
                    'uf' => 'SP',
                    'ibge' => '3550308',
                    'gia' => '1004',
                    'ddd' => '11',
                    'siafi' => '7107'
                ]
            ],
            "Endereço qualquer" => [
                "05795230",
                [
                    'cep' => '05795-230',
                    'logradouro' => 'Rua Luís Maria Ridel',
                    'complemento' => '',
                    'unidade' => '',
                    'bairro' => 'Jardim Rosana',
                    'localidade' => 'São Paulo',
                    'uf' => 'SP',
                    'ibge' => '3550308',
                    'gia' => '1004',
                    'ddd' => '11',
                    'siafi' => '7107'
                ]
            ]
        ];
    }
}
