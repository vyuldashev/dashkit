<?php

$finder = PhpCsFixer\Finder::create()
    ->exclude('vendor')
    ->in(__DIR__.'/src')
    ->in(__DIR__.'/tests')
    ->name('*.php')
    ->ignoreDotFiles(true)
    ->ignoreVCS(true);

return PhpCsFixer\Config::create()
    ->setRules([
        '@PSR1' => false,
        '@PSR2' => true,
        'strict_param' => true,
        'declare_strict_types' => true,
        'array_syntax' => ['syntax' => 'short'],
        'binary_operator_spaces' => [
            'align_equals' => false,
            'align_double_arrow' => null,
        ],
        'blank_line_after_opening_tag' => true,
        'blank_line_before_return' => true,
        'cast_spaces' => true,
        'concat_space' => ['spacing' => 'none'],
        'declare_equal_normalize' => true,
        'function_typehint_space' => true,
        'general_phpdoc_annotation_remove' => ['access', 'package', 'subpackage'],
        'hash_to_slash_comment' => true,
        'heredoc_to_nowdoc' => true,
        'include' => true,
        'lowercase_cast' => true,
        'method_separation' => true,
        'native_function_casing' => true,
        'no_alias_functions' => true,
        'no_blank_lines_after_class_opening' => true,
        'no_blank_lines_after_phpdoc' => true,
        'no_empty_phpdoc' => true,
        'no_empty_statement' => true,
        'no_extra_consecutive_blank_lines' => ['throw', 'use', 'useTrait', 'extra'],
        'no_leading_import_slash' => true,
        'no_leading_namespace_whitespace' => true,
        'no_mixed_echo_print' => ['use' => 'echo'],
        'no_multiline_whitespace_around_double_arrow' => true,
        'no_multiline_whitespace_before_semicolons' => true,
        'no_short_bool_cast' => true,
        'no_singleline_whitespace_before_semicolons' => true,
        'no_spaces_around_offset' => ['inside'],
        'no_trailing_comma_in_list_call' => true,
        'no_trailing_comma_in_singleline_array' => true,
        'no_unneeded_control_parentheses' => true,
        'no_unreachable_default_argument_value' => true,
        'no_unused_imports' => true,
        'no_useless_return' => true,
        'no_whitespace_before_comma_in_array' => true,
        'no_whitespace_in_blank_line' => true,
        'normalize_index_brace' => true,
        'object_operator_without_whitespace' => true,
        'ordered_imports' => ['sortAlgorithm' => 'length'],
        'phpdoc_indent' => true,
        'phpdoc_inline_tag' => true,
        'phpdoc_no_alias_tag' => ['type' => 'var'],
        'phpdoc_no_useless_inheritdoc' => true,
        'phpdoc_scalar' => true,
        'phpdoc_single_line_var_spacing' => true,
        'phpdoc_summary' => true,
        'phpdoc_to_comment' => true,
        'phpdoc_trim' => true,
        'phpdoc_types' => true,
        'phpdoc_var_without_name' => true,
        'psr4' => true,
        'self_accessor' => true,
        'short_scalar_cast' => true,
        'single_blank_line_before_namespace' => true,
        'single_quote' => true,
        'space_after_semicolon' => true,
        'standardize_not_equals' => true,
        'ternary_operator_spaces' => true,
        'trailing_comma_in_multiline_array' => true,
        'trim_array_spaces' => true,
        'unary_operator_spaces' => true,
        'visibility_required' => ['method', 'property'],
        'whitespace_after_comma_in_array' => true,
    ])
    ->setFinder($finder)
    ->setUsingCache(false);