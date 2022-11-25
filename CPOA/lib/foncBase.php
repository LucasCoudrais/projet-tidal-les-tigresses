<?php

function choixAlert($message, $n=0)
{
  $alert = array();
  switch($message)
  {
    case 'connexion':
      $alert['messageAlert'] = ERREUR_CONNECT_BDD;
      break;
    case 'login_exist' :
      $alert['messageAlert'] = LOGIN_EXISTE;
      break;
      case 'etabl_exist' :
        $alert['messageAlert'] = ETABL_EXISTE;
        break;
    case 'query' :
      $alert['messageAlert'] = ERREUR_QUERY_BDD;
      break;
    case 'url_non_valide' :
      $alert['messageAlert'] = TEXTE_PAGE_404;
      break;
        case 'id_non_valide' :
          $alert['messageAlert'] = TEXTE_ERREUR_ID;
          break;
      case 'vip_inexistant' :
        $alert['messageAlert'] = VIP_INEXISTANT;
        break;
        case 'succes' :
          $alert['messageAlert'] = VIP_INEXISTANT;
        $alert['classAlert']='success';
          break;
          case 'fonction_insert' :
            $alert['messageAlert'] = 'erreur insertion ligne';
            break;
            case 'fonction_select' :
              $alert['messageAlert'] = 'erreur select ligne';
              break;
              case 'info_etabl' :
                $alert['messageAlert'] = 'erreur info etablissement';
                break;
                case 'no_place' :
                  $alert['messageAlert'] = 'Vous ne pouvez pas assigner ce VIP a cet établissement car il n\'y a plus de place dans cet établissement';
                  break;
                  case 'no_hebergement' :
                    $alert['messageAlert'] = 'Vous ne pouvez pas assigner ce VIP à un établissement car il n\'est pas éligible aux assignation' ;
                    break;
    default :
      $alert['messageAlert'] = MESSAGE_ERREUR;
  }
  return $alert;
}
