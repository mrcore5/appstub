<template>
    <div class="row">
        <h2>Welcome to Home.vue</h2>
        <input type="text" v-model="name">
        <div>Hi {{ name }}</div>
    </div>
</template>

<script>
    //import Dropdown from './Dropdown.vue';

    export default {
        data () {
            return {
                name: 'there!'
            };
        },

        props: [
            "data"
        ],

        mounted() {
            console.log('Component ready.')
        },

        computed: {
            getDropdownValues: function () {
                return [
                    {
                        name: 'name1',
                        value: 'value1'
                    },
                    {
                        name: 'name2',
                        value: 'value2'
                    },
                ];
            }
        },

        /*components: {
            Dropdown
        }*/
    }
</script>
