<template>
    <div class="postagem">
        <div class="imagem" :style="{ 'background-image' : 'url(\'' + this.post.post.img_destacada + '\')' }"></div>
        <div class="container">
            <router-link :to="{name: 'Home'}">Voltar</router-link>
            <div class="header">
                <h1 class="titulo">{{this.post.post.titulo}}</h1>
                <div class="header-footer">
                    <span class="auto float-left">Publicado por: {{this.post.user.name}}</span>
                    <span class="auto float-right">{{formatDate(this.post.post.created_at)}}</span>
                </div>
                <div class="clearfix"></div>
                <hr>
                <div v-html="this.post.post.conteudo" class="post-conteudo"></div>
            </div>
        </div>

    </div>
</template>
<script>
    import moment from 'moment'
    export default {
        name: 'conteudo-post-single',
        props: ['post'],
        methods: {
            formatDate(value) {
                if (value) {
                    return moment(String(value)).format('DD/MM/YYYY HH:mm')
                }
            }
        },
    }
</script>
<style lang="scss">
    .postagem {
        .container {
            margin-top: 20px !important;
        }
        .imagem {
            background-position: 50%;
            background-size: cover !important;
            height: 500px;
            width: 100%;
        }
        .header {
            img {
                width: 100%;
            }


        }
    }
</style>
