<template>
    <main class="w-full h-screen flex items-center justify-center">
        <div class="flex flex-col">
            <form @submit.prevent="submit">
                <Card class="max-w-[350px]">
                    <CardHeader>
                        <CardTitle>Chá de cozinha da Gabi ❤️</CardTitle>
                        <CardDescription class="text-xs">
                            Para escolher seu presente, por favor, insira seu e-mail e o código de convite que você
                            recebeu.
                        </CardDescription>
                    </CardHeader>
                    <CardContent>
                        <div class="grid items-center w-full gap-4">
                            <div class="flex flex-col space-y-1.5">
                                <Label for="email">E-mail</Label>
                                <Input id="email" type="email" placeholder="Digite seu e-mail" required v-model="email"/>

                                <div class="text-red-500 text-xs" v-if="$page.props.errors.email">
                                    {{ $page.props.errors.email }}
                                </div>
                            </div>
                            <div class="flex flex-col space-y-1.5">
                                <Label for="code">
                                    Código de convite
                                </Label>
                                <Input id="code" placeholder="Digite seu código de convite" required v-model="code"/>

                                <div class="text-red-500 text-xs" v-if="$page.props.errors.code">
                                    {{ $page.props.errors.code }}
                                </div>
                            </div>
                        </div>
                    </CardContent>
                    <CardFooter class="flex justify-end px-6 pb-6">
                        <Button type="submit">
                            Escolher presente
                        </Button>
                    </CardFooter>
                </Card>
            </form>
        </div>
    </main>
</template>

<script>
import Input from '@/Components/ui/input/Input.vue';
import Button from '@/Components/ui/button/Button.vue';
import Label from '@/Components/ui/label/Label.vue';
import Card from '@/Components/ui/card/Card.vue';
import CardHeader from '@/Components/ui/card/CardHeader.vue';
import CardTitle from '@/Components/ui/card/CardTitle.vue';
import CardDescription from '@/Components/ui/card/CardDescription.vue';
import CardContent from '@/Components/ui/card/CardContent.vue';
import CardFooter from '@/Components/ui/card/CardFooter.vue';

export default {
    components: {
        Input,
        Button,
        Label,
        Card,
        CardHeader,
        CardTitle,
        CardDescription,
        CardContent,
        CardFooter
    },
    data() {
        return {
            code: '',
            email: ''
        };
    },
    methods: {
        submit() {
            this.$inertia.post('/verify-invite', {
                code: this.code,
                email: this.email
            });
        }
    }
};
</script>
