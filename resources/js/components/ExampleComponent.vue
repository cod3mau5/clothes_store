<template>
    <div class="columns mx-0">
        <div class="column is-half is-offset-one-quarter">
            <div class="box">

                    <section>
                        <b-field>
                            <b-upload v-model="dropFiles"
                                multiple
                                drag-drop>

                                <section class="section">
                                    <div class="content has-text-centered">
                                        <p>
                                            <img :src="asset+'images/resources/image_placeholder.jpg'" alt="">
                                        </p>
                                        <p>Click para subir imagenes</p>
                                    </div>
                                </section>
                            </b-upload>
                        </b-field>

                        <div class="tags">
                            <span v-for="(file, index) in dropFiles"
                                :key="index"
                                class="tag is-primary" >
                                {{file.name}}
                                <button class="delete is-small"
                                    type="button"
                                    @click="deleteDropFile(index)">
                                </button>
                            </span>
                        </div>
                    </section>



            </div>
        </div>
    </div>
</template>
<style scoped>
    .upload.control{
        display: block;
    }
</style>

<script>
    export default {
        data() {
            return {
                dropFiles: [],

            }
        },
        mounted(){

        },
        methods: {
            deleteDropFile(index) {
                this.dropFiles.splice(index, 1)
            }
        },
        props:[
            'asset'
        ]
    }
</script>
