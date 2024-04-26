import presetQuick from "franken-ui/shadcn-ui/preset-quick";

export default {
    presets: [
        presetQuick({
            theme: "zinc",
        }),
    ],
    content: ["./resources/**/*.blade.php", "./resources/**/*.js"],
    theme: {
        extend: {},
    },
};
