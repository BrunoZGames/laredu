<script>
import { defineComponent } from 'vue'
import FullCalendar from '@fullcalendar/vue3'
import dayGridPlugin from '@fullcalendar/daygrid'
import timeGridPlugin from '@fullcalendar/timegrid'
import interactionPlugin from '@fullcalendar/interaction'
import { INITIAL_EVENTS, createEventId } from '../../../../js/event-utils'


export default defineComponent({
    components: {
        FullCalendar,
    },
    data() {
        return {
            calendarOptions: {
                plugins: [
                    dayGridPlugin,
                    timeGridPlugin,
                    interactionPlugin
                ],
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay'
                },
                initialView: 'dayGridMonth',
                initialEvents: INITIAL_EVENTS, // alternatively, use the `events` setting to fetch from a feed
                selectable: true,
                selectMirror: true,
                dayMaxEvents: true,
                eventsSet: this.handleEvents,
                dateClick: this.handleDateClick
            },
            currentEvents: [],
        }
    },
    methods: {
        handleEvents(events) {
            this.currentEvents = events
        },
        handleDateClick(clickInfo){
            this.$emit('dateClick', clickInfo)
        }
    }
})

</script>

<template>
    <div class='demo-app'>
        <div class='demo-app-main'>
            <FullCalendar class='demo-app-calendar' :options='calendarOptions'>
                <template v-slot:eventContent='arg'>
                    <b>{{ arg.timeText }}</b>
                    <i>{{ arg.event.title }}</i>
                </template>
            </FullCalendar>
        </div>
    </div>
</template>