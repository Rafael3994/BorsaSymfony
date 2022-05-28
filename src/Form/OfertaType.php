<?php

namespace App\Form;

use App\Entity\Oferta;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\Categoria;

use Symfony\Component\Form\Extension\Core\Type\TextType;

class OfertaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $categoria = new Categoria();
        $builder
            // ->add('empresa_id')
            ->add('titol', TextType::class, [
                'attr' => [
                    'placeholder' => 'Titol',
                    'class' => 'form-control'
                ]
            ])
            ->add('descripcio')
            // ->add('data_publicacio')
            ->add('ubicacio')
            // ->add('estat')
            ->add('categoria_id');
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Oferta::class,
        ]);
    }
}
