<template>
    <div class="w-full h-screen flex flex-col items-center justify-center px-4 lg:px-24 py-10">
        <div class="text-center">
            <span class="text-2xl font-bold">Obrigado por nos presentear!</span>
            <p class="mt-4 text-lg">A sua presença e generosidade tornam nosso dia ainda mais especial. Estamos muito
                felizes em compartilhar este momento com você.</p>
        </div>

        <div class="mt-8 w-full lg:w-2/3">
            <div class="text-center">
                <h2 class="text-xl font-semibold">Detalhes do Evento</h2>
                <p class="mt-2">Data: 09 de Junho de 2024</p>
                <p class="mt-1">Hora: 17:00</p>
                <p class="mt-1">Local: Cantinho Fest, São Miguel dos Campos</p>
            </div>

            <div class="mt-8 text-center">
                <h2 class="text-xl font-semibold">Agradecimento</h2>
                <p class="mt-2">Agradecemos de coração por cada presente e por cada mensagem de carinho. Vocês fazem
                    parte da nossa história e do nosso futuro.</p>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    mounted() {
        this.runConffeti()
    },
    methods: {
        runConffeti() {
            const duration = 15 * 100,
                animationEnd = Date.now() + duration,
                defaults = { startVelocity: 30, spread: 360, ticks: 60, zIndex: 0 };

            function randomInRange(min, max) {
                return Math.random() * (max - min) + min;
            }

            const interval = setInterval(function () {
                const timeLeft = animationEnd - Date.now();

                if (timeLeft <= 0) {
                    return clearInterval(interval);
                }

                const particleCount = 50 * (timeLeft / duration);

                // since particles fall down, start a bit higher than random
                confetti(
                    Object.assign({}, defaults, {
                        particleCount,
                        origin: { x: randomInRange(0.1, 0.3), y: Math.random() - 0.2 },
                    })
                );
                confetti(
                    Object.assign({}, defaults, {
                        particleCount,
                        origin: { x: randomInRange(0.7, 0.9), y: Math.random() - 0.2 },
                    })
                );
            }, 250);
        }
    }
}
</script>
