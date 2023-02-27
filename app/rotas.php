<?php
include 'Controller/Fichacontroller.php';

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($url)
{
    /*Pagina Inicial*/
    case "/":
        Fichacontroller::index();
    break;

    /*Perfil sem apertar o botao*/
    case "/form":
        Fichacontroller::form();
    break;

    /*Habilidades sem apertar o botao*/
    case "/habilidades":
        Fichacontroller::habilidades();
    break;

    case "/form/ficha":
        Fichacontroller::save();
    break;

    case "/habilidades/form":
        Fichacontroller::saveHabilidade();
    break;

    case "/habilidades/especializacoes":
        Fichacontroller::especialidades();
    break;

    case "/habilidades/especializacoes/save":
        Fichacontroller::especialidadeTextosave();
        Fichacontroller::especialidadessave();
    break;

    case "/equipamentos":
        Fichacontroller::equipamentos();
    break;

    case "/equipamentos/insert":
        Fichacontroller::equipamentosinsert();
    break;

    case "/equipamentos/delete":
        Fichacontroller::equipamentosdelete();
    default:

    case "/equipamentos/dinheiro":
        Fichacontroller::updateDinheiro();
    break;

    case "/calculadora":
        Fichacontroller::selectCalculadora();
    break;

    case "/tabelaum":
        Fichacontroller::updateCalculadora();
    break;

    case "/tabeladois":
        Fichacontroller::updateCalculadoraDois();
    break;
}