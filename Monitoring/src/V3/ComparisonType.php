<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/common.proto

namespace Google\Cloud\Monitoring\V3;

/**
 * Specifies an ordering relationship on two arguments, here called left and
 * right.
 *
 * Protobuf type <code>google.monitoring.v3.ComparisonType</code>
 */
class ComparisonType
{
    /**
     * No ordering relationship is specified.
     *
     * Generated from protobuf enum <code>COMPARISON_UNSPECIFIED = 0;</code>
     */
    const COMPARISON_UNSPECIFIED = 0;
    /**
     * The left argument is greater than the right argument.
     *
     * Generated from protobuf enum <code>COMPARISON_GT = 1;</code>
     */
    const COMPARISON_GT = 1;
    /**
     * The left argument is greater than or equal to the right argument.
     *
     * Generated from protobuf enum <code>COMPARISON_GE = 2;</code>
     */
    const COMPARISON_GE = 2;
    /**
     * The left argument is less than the right argument.
     *
     * Generated from protobuf enum <code>COMPARISON_LT = 3;</code>
     */
    const COMPARISON_LT = 3;
    /**
     * The left argument is less than or equal to the right argument.
     *
     * Generated from protobuf enum <code>COMPARISON_LE = 4;</code>
     */
    const COMPARISON_LE = 4;
    /**
     * The left argument is equal to the right argument.
     *
     * Generated from protobuf enum <code>COMPARISON_EQ = 5;</code>
     */
    const COMPARISON_EQ = 5;
    /**
     * The left argument is not equal to the right argument.
     *
     * Generated from protobuf enum <code>COMPARISON_NE = 6;</code>
     */
    const COMPARISON_NE = 6;
}

