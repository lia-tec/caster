<?php

return (new PhpCsFixer\Config())
    ->setRules([
        '@PSR12'                                 => true,
        'array_indentation'                      => true,
        'array_syntax'                           => ['syntax' => 'short'],
        'combine_consecutive_unsets'             => true,
        'class_attributes_separation'            => ['elements' => ['method' => 'one', ]],
        'multiline_whitespace_before_semicolons' => false,
        'single_quote'                           => true,
        'binary_operator_spaces'                 => [
            'operators' => [
                '=>' => 'align_single_space_minimal',
                '='  => 'align_single_space_minimal',
            ],
        ],
        'braces' => [
            'allow_single_line_closure' => true,
        ],
        'concat_space'              => ['spacing' => 'one'],
        'declare_equal_normalize'   => true,
        'function_typehint_space'   => true,
        'single_line_comment_style' => ['comment_types' => ['hash']],
        'include'                   => true,
        'lowercase_cast'            => true,
        'no_extra_blank_lines'      => [
            'tokens' => [
                'curly_brace_block',
                'extra',
                'throw',
                'use',
            ],
        ],
        'no_multiline_whitespace_around_double_arrow' => true,
        'trailing_comma_in_multiline'                 => [
            'elements' => ['arrays'],
        ],
        'no_spaces_around_offset'             => true,
        'no_unneeded_control_parentheses'     => true,
        'no_unused_imports'                   => true,
        'no_whitespace_before_comma_in_array' => true,
        'no_whitespace_in_blank_line'         => true,
        'object_operator_without_whitespace'  => true,
        'phpdoc_align'                        => true,
        'phpdoc_indent'                       => true,
        'single_class_element_per_statement'  => true,
        'ternary_operator_spaces'             => true,
        'trim_array_spaces'                   => true,
        'unary_operator_spaces'               => true,
        'whitespace_after_comma_in_array'     => true,
        'space_after_semicolon'               => true,
    ])
    ->setLineEnding("\n")
;
