<?php
namespace App\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\General;

class GeneralType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('contex', TextType::class)
            ->add('allowguest', TextType::class)
            ->add('allowoverlap', TextType::class)
           // ->add('bindport', TextType::class)
            ->add('bindaddr', TextType::class)
            ->add('srvlookup', TextType::class)
            ->add('disallow', TextType::class)
            ->add('allow', TextType::class)
            ->add('alwaysauthreject', TextType::class)
            ->add('canreinvite', TextType::class)
            ->add('nat', TextType::class)
            ->add('sessionTimers', TextType::class)
            ->add('localnet', TextType::class)
            ->add('save', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => General::class,
        ]);
    }
}