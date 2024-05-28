<template>
    <DatePicker v-model="date" />
</template>

<script>
import {  DatePicker } from 'v-calendar';
import 'v-calendar/style.css';

export default {
    components: {
        DatePicker,
    },
    data() {
        return {
            date: new Date(),
        };
    },
}
</script>