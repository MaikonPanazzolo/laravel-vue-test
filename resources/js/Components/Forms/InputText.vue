<template>
    <div class="form-input">
        <input :type="type"
            :name="name"
            :id="id"
            :placeholder="placeholder"
            :value="value"
            :disabled="disabled"
            :autofocus="autofocus"
            :autocomplete="autocomplete"
            :maxlength="maxlength"
            :class="classes"
            @input="onInput"

        >       
        <label :for="id">{{ label }}</label>
        <fieldset>
            <legend>&ZeroWidthSpace;</legend>
        </fieldset>
    </div>
</template>
<script>
export default {
    props: {
        name: {
            type: String,
            default: ''
        },
        id: {
            type: String,
            default: ''
        },
        placeholder: {
            type: String,
            default: ' '
        },
        value: {
            type: String,
            default: ''
        },
        disabled: {
            type: Boolean,
            default: false
        },
        autofocus: {
            type: Boolean,
            default: false
        },
        autocomplete: {
            type: String,
            default: 'off'
        },
        maxlength: {
            type: Number,
            default: null
        },
        classes: {
            type: String,
            default: ''
        },
        label: {
            type: String,
            default: ''
        },
        type: {
            type: String,
            default: 'text'
        }
    },

    methods: {
        onInput(event) {
            this.$emit('input', event.target.value);
        }
    }
}
</script>