<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex justify-center items-center">
    <div class="w-7/12 gap-y-3 flex flex-col my-[14rem]">
        <form class="flex flex-col gap-y-5">
            <input class="w-full" placeholder="Enter Email Address..." type="email">
            <input class="w-full" placeholder="Enter Password..." type="password">
            <div class="flex flex-row gap-x-3">
                <input type="checkbox" class="checkbox checkbox-info" />
                <label>Remember Me</label>
            </div>
            <input class="w-full bg-[#007BFF] text-white cursor-pointer rounded-lg h-[45px] hover:bg-[#0067D5]" type="submit" value="Login">
            <div class="my-9">
            <div class="h-[2px] rounded-md bg-gray-200 w-full"></div>
            </div>
            <button class="flex items-center px-3 gap-x-2.5 w-full border-2 border-[#4285F4] text-black cursor-pointer rounded-3xl h-[45px]"><img src="{{asset ('assets/google.svg')}}">Login with Google</button>
            <button class="flex items-center px-4 gap-x-2.5 w-full bg-[#1778F2] text-white cursor-pointer rounded-3xl h-[45px] hover:bg-[#0067D5]"><img src="{{asset ('assets/facebook.svg')}}">Login with Facebook</button>
        </form>
    </div>
</body>

</html>