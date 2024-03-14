<?php
$car="Toyota";
$model="Bengo";
switch($car)
{
    case 'honda':
        switch($model)
        {
            case 'fit':
                echo "it is a five door hatch back";
                break;
                case 'crv':
                    echo "honda crv is a turbo charged";
                    break;
                    case 'civic':
                        echo "honda civic is a 6 gear speed manual transmission";
                        break;
                        default:
                        echo "sorry this model doesnt exist in Honda series";
                        break;
        }
        break;
        case 'Toyota':
            switch($model){
                case 'hilux':
                    echo "toyota hilux is a powerful machine with an average displacement of 2393cc";
                    break;
                    case 'vitz':
                        echo "has 1000cc engine ";
                        break;
                        default:
                        echo "Sorry, we dont have such model for Toyota";
                    }
                    break;
                    case 'volkswagen':
                        switch($model)
                        {
                            case 'golf gt':
                                echo "volkswagen tiguan is an ever ready  car for adventures";
                                break;
                        }
                        break;
                        default:
                        echo "sorry you model appears to that of a wheelbarow";
                    }

                        ?>
            
