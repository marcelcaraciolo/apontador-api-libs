<?php
/**
 * config.php
 *
 * Configurações do aplicativo que vai acessar a Apontador API via ApontadorApiLib.php
 * (podem ser obtidas no perfil do usuário "dono" do aplicativo em http://www.apontador.com.br)
 *
 * Copyright 2010 Apontador/LBSLocal
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http: *www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 */

$key = "COLOQUE SEU KEY AQUI";
$secret = "COLOQUE SEU SECRET AQUI";
$callbackurl = "COLOQUE A URL DO ARQUIVO callback.php. ex.: http://localhost/apontador-api-libs/php/exemplo/callback.php";

if (substr($key,0,7)=="COLOQUE") {
	die('Abra o config.php e configure as informações solicitadas. Em caso de dúvida, consulte o <a href="../README">README</a>');
}