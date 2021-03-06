<?php

/*
 * This file is part of kubawerlos/php-cs-fixer-config.
 *
 * (c) 2020 Kuba Werłos
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

declare(strict_types=1);

namespace PhpCsFixerConfig\Rules;

use PhpCsFixerCustomFixers\Fixer;

/**
 * @internal
 */
final class ProjectRules implements RulesInterface
{
    public function getRules(): array
    {
        return [
            'align_multiline_comment' => [
                'comment_type' => 'all_multiline',
            ],
            'array_indentation' => true,
            'array_syntax' => [
                'syntax' => 'short',
            ],
            'backtick_to_shell_exec' => true,
            'binary_operator_spaces' => true,
            'blank_line_after_namespace' => true,
            'blank_line_after_opening_tag' => true,
            'blank_line_before_statement' => [
                'statements' => [
                    'return',
                ],
            ],
            'braces' => true,
            'cast_spaces' => true,
            'class_attributes_separation' => [
                'elements' => [
                    'method',
                    'property',
                ],
            ],
            'class_definition' => [
                'multi_line_extends_each_single_line' => true,
                'single_item_single_line' => true,
            ],
            'class_keyword_remove' => false,
            'combine_consecutive_issets' => false,
            'combine_consecutive_unsets' => false,
            'combine_nested_dirname' => true,
            'comment_to_phpdoc' => true,
            'compact_nullable_typehint' => true,
            'concat_space' => [
                'spacing' => 'one',
            ],
            'constant_case' => true,
            'date_time_immutable' => true,
            'declare_equal_normalize' => true,
            'declare_strict_types' => true,
            'dir_constant' => true,
            'doctrine_annotation_array_assignment' => true,
            'doctrine_annotation_braces' => true,
            'doctrine_annotation_indentation' => true,
            'doctrine_annotation_spaces' => true,
            'elseif' => true,
            'encoding' => true,
            'ereg_to_preg' => true,
            'error_suppression' => true,
            'escape_implicit_backslashes' => true,
            'explicit_indirect_variable' => true,
            'explicit_string_variable' => true,
            'final_class' => true,
            'final_internal_class' => true,
            'final_public_method_for_abstract_class' => true,
            'final_static_access' => true,
            'fopen_flag_order' => true,
            'fopen_flags' => true,
            'full_opening_tag' => true,
            'fully_qualified_strict_types' => true,
            'function_declaration' => true,
            'function_to_constant' => [
                'functions' => [
                    'get_called_class',
                    'get_class',
                    'get_class_this',
                    'php_sapi_name',
                    'phpversion',
                    'pi',
                ],
            ],
            'function_typehint_space' => true,
            'general_phpdoc_annotation_remove' => false,
            'global_namespace_import' => false,
            'header_comment' => false,
            'heredoc_indentation' => true,
            'heredoc_to_nowdoc' => true,
            'implode_call' => true,
            'include' => true,
            'increment_style' => [
                'style' => 'post',
            ],
            'indentation_type' => true,
            'is_null' => true,
            'line_ending' => true,
            'linebreak_after_opening_tag' => true,
            'list_syntax' => true,
            'logical_operators' => true,
            'lowercase_cast' => true,
            'lowercase_keywords' => true,
            'lowercase_static_reference' => true,
            'magic_constant_casing' => true,
            'magic_method_casing' => true,
            'mb_str_functions' => true,
            'method_argument_space' => [
                'on_multiline' => 'ensure_fully_multiline',
            ],
            'method_chaining_indentation' => true,
            'modernize_types_casting' => true,
            'multiline_comment_opening_closing' => true,
            'multiline_whitespace_before_semicolons' => true,
            'native_constant_invocation' => false,
            'native_function_casing' => true,
            'native_function_invocation' => [
                'include' => [
                    '@all',
                ],
            ],
            'native_function_type_declaration_casing' => true,
            'new_with_braces' => true,
            'no_alias_functions' => true,
            'no_alternative_syntax' => true,
            'no_binary_string' => true,
            'no_blank_lines_after_class_opening' => true,
            'no_blank_lines_after_phpdoc' => true,
            'no_blank_lines_before_namespace' => false,
            'no_break_comment' => true,
            'no_closing_tag' => true,
            'no_empty_comment' => true,
            'no_empty_phpdoc' => true,
            'no_empty_statement' => true,
            'no_extra_blank_lines' => [
                'tokens' => [
                    'continue',
                    'curly_brace_block',
                    'extra',
                    'parenthesis_brace_block',
                    'return',
                    'square_brace_block',
                    'throw',
                    'use',
                    'use_trait',
                ],
            ],
            'no_homoglyph_names' => true,
            'no_leading_import_slash' => true,
            'no_leading_namespace_whitespace' => true,
            'no_mixed_echo_print' => true,
            'no_multiline_whitespace_around_double_arrow' => true,
            'no_null_property_initialization' => true,
            'no_php4_constructor' => true,
            'no_short_bool_cast' => true,
            'no_short_echo_tag' => true,
            'no_singleline_whitespace_before_semicolons' => true,
            'no_spaces_after_function_name' => true,
            'no_spaces_around_offset' => true,
            'no_spaces_inside_parenthesis' => true,
            'no_superfluous_elseif' => true,
            'no_superfluous_phpdoc_tags' => [
                'remove_inheritdoc' => true,
            ],
            'no_trailing_comma_in_list_call' => true,
            'no_trailing_comma_in_singleline_array' => true,
            'no_trailing_whitespace' => true,
            'no_trailing_whitespace_in_comment' => true,
            'no_unneeded_control_parentheses' => true,
            'no_unneeded_curly_braces' => true,
            'no_unneeded_final_method' => true,
            'no_unreachable_default_argument_value' => true,
            'no_unset_cast' => true,
            'no_unset_on_property' => true,
            'no_unused_imports' => true,
            'no_useless_else' => true,
            'no_useless_return' => true,
            'no_whitespace_before_comma_in_array' => true,
            'no_whitespace_in_blank_line' => true,
            'non_printable_character' => true,
            'normalize_index_brace' => true,
            'not_operator_with_space' => false,
            'not_operator_with_successor_space' => false,
            'nullable_type_declaration_for_default_null_value' => true,
            'object_operator_without_whitespace' => true,
            'ordered_class_elements' => true,
            'ordered_imports' => true,
            'ordered_interfaces' => true,
            'php_unit_construct' => true,
            'php_unit_dedicate_assert' => true,
            'php_unit_dedicate_assert_internal_type' => true,
            'php_unit_expectation' => true,
            'php_unit_fqcn_annotation' => true,
            'php_unit_internal_class' => false,
            'php_unit_method_casing' => true,
            'php_unit_mock' => true,
            'php_unit_mock_short_will_return' => true,
            'php_unit_namespaced' => true,
            'php_unit_no_expectation_annotation' => true,
            'php_unit_ordered_covers' => true,
            'php_unit_set_up_tear_down_visibility' => true,
            'php_unit_size_class' => false,
            'php_unit_strict' => true,
            'php_unit_test_annotation' => true,
            'php_unit_test_case_static_method_calls' => [
                'call_type' => 'self',
            ],
            'php_unit_test_class_requires_covers' => true,
            'phpdoc_add_missing_param_annotation' => true,
            'phpdoc_align' => true,
            'phpdoc_annotation_without_dot' => true,
            'phpdoc_indent' => true,
            'phpdoc_inline_tag' => true,
            'phpdoc_line_span' => [
                'property' => 'single',
            ],
            'phpdoc_no_access' => true,
            'phpdoc_no_alias_tag' => true,
            'phpdoc_no_empty_return' => true,
            'phpdoc_no_package' => true,
            'phpdoc_no_useless_inheritdoc' => true,
            'phpdoc_order' => true,
            'phpdoc_return_self_reference' => true,
            'phpdoc_scalar' => true,
            'phpdoc_separation' => true,
            'phpdoc_single_line_var_spacing' => true,
            'phpdoc_summary' => false,
            'phpdoc_to_comment' => true,
            'phpdoc_to_param_type' => true,
            'phpdoc_to_return_type' => true,
            'phpdoc_trim' => true,
            'phpdoc_trim_consecutive_blank_line_separation' => true,
            'phpdoc_types' => true,
            'phpdoc_types_order' => true,
            'phpdoc_var_annotation_correct_order' => true,
            'phpdoc_var_without_name' => true,
            'pow_to_exponentiation' => true,
            'protected_to_private' => true,
            'psr0' => false,
            'psr4' => true,
            'random_api_migration' => true,
            'return_assignment' => true,
            'return_type_declaration' => true,
            'self_accessor' => true,
            'self_static_accessor' => true,
            'semicolon_after_instruction' => true,
            'set_type_to_cast' => true,
            'short_scalar_cast' => true,
            'simple_to_complex_string_variable' => true,
            'simplified_null_return' => true,
            'single_blank_line_at_eof' => true,
            'single_blank_line_before_namespace' => true,
            'single_class_element_per_statement' => true,
            'single_import_per_statement' => true,
            'single_line_after_imports' => true,
            'single_line_comment_style' => true,
            'single_line_throw' => true,
            'single_quote' => true,
            'single_trait_insert_per_statement' => true,
            'space_after_semicolon' => true,
            'standardize_increment' => true,
            'standardize_not_equals' => true,
            'static_lambda' => true,
            'strict_comparison' => true,
            'strict_param' => true,
            'string_line_ending' => true,
            'switch_case_semicolon_to_colon' => true,
            'switch_case_space' => true,
            'ternary_operator_spaces' => true,
            'ternary_to_null_coalescing' => true,
            'trailing_comma_in_multiline_array' => true,
            'trim_array_spaces' => true,
            'unary_operator_spaces' => true,
            'visibility_required' => [
                'elements' => [
                    'const',
                    'method',
                    'property',
                ],
            ],
            'void_return' => true,
            'whitespace_after_comma_in_array' => true,
            'yoda_style' => [
                'equal' => false,
                'identical' => false,
                'less_and_greater' => false,
            ],
            Fixer\CommentSurroundedBySpacesFixer::name() => true,
            Fixer\CommentedOutFunctionFixer::name() => true,
            Fixer\DataProviderNameFixer::name() => true,
            Fixer\DataProviderReturnTypeFixer::name() => true,
            Fixer\DataProviderStaticFixer::name() => true,
            Fixer\InternalClassCasingFixer::name() => true,
            Fixer\MultilineCommentOpeningClosingAloneFixer::name() => true,
            Fixer\NoCommentedOutCodeFixer::name() => true,
            Fixer\NoDoctrineMigrationsGeneratedCommentFixer::name() => true,
            Fixer\NoDuplicatedArrayKeyFixer::name() => true,
            Fixer\NoDuplicatedImportsFixer::name() => true,
            Fixer\NoImportFromGlobalNamespaceFixer::name() => true,
            Fixer\NoLeadingSlashInGlobalNamespaceFixer::name() => true,
            Fixer\NoNullableBooleanTypeFixer::name() => true,
            Fixer\NoPhpStormGeneratedCommentFixer::name() => true,
            Fixer\NoReferenceInFunctionDefinitionFixer::name() => true,
            Fixer\NoSuperfluousConcatenationFixer::name() => [
                'allow_preventing_trailing_spaces' => true,
            ],
            Fixer\NoUselessCommentFixer::name() => true,
            Fixer\NoUselessDoctrineRepositoryCommentFixer::name() => true,
            Fixer\NoUselessParenthesisFixer::name() => true,
            Fixer\NoUselessSprintfFixer::name() => true,
            Fixer\NoUselessStrlenFixer::name() => true,
            Fixer\NumericLiteralSeparatorFixer::name() => true,
            Fixer\OperatorLinebreakFixer::name() => true,
            Fixer\PhpUnitNoUselessReturnFixer::name() => true,
            Fixer\PhpdocNoIncorrectVarAnnotationFixer::name() => true,
            Fixer\PhpdocNoSuperfluousParamFixer::name() => true,
            Fixer\PhpdocOnlyAllowedAnnotationsFixer::name() => false,
            Fixer\PhpdocParamOrderFixer::name() => true,
            Fixer\PhpdocParamTypeFixer::name() => true,
            Fixer\PhpdocSelfAccessorFixer::name() => true,
            Fixer\PhpdocSingleLineVarFixer::name() => true,
            Fixer\PhpdocTypesTrimFixer::name() => true,
            Fixer\SingleSpaceAfterStatementFixer::name() => true,
            Fixer\SingleSpaceBeforeStatementFixer::name() => true,
        ];
    }
}
