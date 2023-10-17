<?php
namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;

class RegistrationFormType_old extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->add('nome')             
        ->add('email', EmailType::class)             
        ->add('telefone', TextType::class, [            
            'attr' => [
               'required' => true,
               'label' => 'Celular',
               'data-mask' => '(00) 00000-0000',
               'placeholder' => '(99) 99999-9999',            
            ]
        ])         
        ->add('password', RepeatedType::class, [           
            'type' => PasswordType::class,            
            'invalid_message' => 'As senhas devem coincidir.',
            'required' => true,
            'first_options' => [
                'label' => 'Senha',
                'attr' => ['class' => 'input--style-1'],
            ],
            'second_options' => [
                'label' => 'Confirmação de Senha',
                'attr' => ['class' => 'input--style-1'],
            ],
            
        ])     
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
