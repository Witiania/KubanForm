<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Contracts\Translation\TranslatorInterface;

class CommentForm extends AbstractType
{
    public function __construct(
        private readonly TranslatorInterface $translator
    )
    {

    }
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('firstname',textType::class,[
                'label' => $this->translator->trans('comment-form-first-name'),
                ])
            ->add('lastname',textType::class,[
                'label' => $this->translator->trans('comment-form-last-name'),
                ])
            ->add('description',textType::class,[
                'label' => $this->translator->trans('comment-form-description'),
                ])
            ->add('submit',textType::class,[
                'label' => $this->translator->trans('comment-form-submit'),
                ]);
    }
}