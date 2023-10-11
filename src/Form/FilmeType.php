<?php
namespace App\Form;

use App\Entity\Filme;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FilmeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titulo')
            ->add('descricao')
            ->add('categoria')
            ->add('foto', FileType::class, [
                'required' => false,
                'mapped' => false
            ])
        ;
    }
       
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Filme::class,
        ]);
    }
}
