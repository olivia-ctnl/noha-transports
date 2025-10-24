@extends('layouts.app')

@section('title', 'Contact - Noha Transports')

@section('content')
{{-- Hero Section --}}
<section class="bg-[#6465A5] py-32 md:py-24 sm:py-20 px-4 text-center">
    <div class="max-w-6xl mx-auto">
        <div class="text-white animate-fadeInUp">
            <h1
                class="text-4xl md:text-3xl sm:text-2xl font-semibold mb-10 md:mb-8 leading-tight max-w-4xl mx-auto animate-fadeInUp animation-delay-200">
                Contactez-nous
            </h1>
        </div>
    </div>
</section>

{{-- Formulaire de contact --}}
<section class="py-16 bg-gray-50">
    <div class="max-w-3xl mx-auto px-4 sm:px-6">
        <div class="bg-white border border-gray-200 rounded-xl p-8 shadow-sm transition-transform duration-200
        animate-fadeInUp">
            {{-- Message de succès --}}
            @if (session('success'))
            <div class="mb-6 p-4 bg-green-100 border border-green-400 text-green-700 rounded-lg animate-fadeInUp">
                <div class="flex items-center">
                    <i class="fas fa-check-circle mr-3 text-xl"></i>
                    <p class="font-medium">{{ session('success') }}</p>
                </div>
            </div>
            @endif

            {{-- Formulaire --}}
            <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                @csrf

                {{-- Nom --}}
                <div class="animate-fadeInUp delay-300">
                    <label for="nom" class="block text-sm font-semibold text-gray-700 mb-2">
                        Nom <span class="text-red-500">*</span>
                    </label>
                    <input type="text" id="nom" name="nom" value="{{ old('nom') }}"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#6465a5] focus:border-transparent transition-all @error('nom') border-red-500 @enderror"
                        placeholder="Nom" required>
                    @error('nom')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Prénom --}}
                <div class="animate-fadeInUp delay-400">
                    <label for="prenom" class="block text-sm font-semibold text-gray-700 mb-2">
                        Prénom <span class="text-red-500">*</span>
                    </label>
                    <input type="text" id="prenom" name="prenom" value="{{ old('prenom') }}"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#6465a5] focus:border-transparent transition-all @error('prenom') border-red-500 @enderror"
                        placeholder="Prénom" required>
                    @error('prenom')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Email --}}
                <div class="animate-fadeInUp delay-500">
                    <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">
                        Email <span class="text-red-500">*</span>
                    </label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#6465a5] focus:border-transparent transition-all @error('email') border-red-500 @enderror"
                        placeholder="Email" required>
                    @error('email')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Téléphone --}}
                <div class="animate-fadeInUp delay-600">
                    <label for="telephone" class="block text-sm font-semibold text-gray-700 mb-2">
                        Téléphone <span class="text-red-500">*</span>
                    </label>
                    <input type="tel" id="telephone" name="telephone" value="{{ old('telephone') }}"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#6465a5] focus:border-transparent transition-all @error('telephone') border-red-500 @enderror"
                        placeholder="Téléphone" required>
                    @error('telephone')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Message --}}
                <div class="animate-fadeInUp delay-700">
                    <label for="message" class="block text-sm font-semibold text-gray-700 mb-2">
                        Message <span class="text-red-500">*</span>
                    </label>
                    <textarea id="message" name="message" rows="6"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#6465a5] focus:border-transparent transition-all resize-none @error('message') border-red-500 @enderror"
                        placeholder="Ecrivez votre motre message ici" required>{{ old('message') }}</textarea>
                    @error('message')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Bouton de soumission --}}
                <div class="animate-fadeInUp delay-800">
                    <button type="submit"
                        class="w-full bg-[#f05837] hover:bg-[#f28a30] text-white font-semibold py-4 px-6 rounded-lg shadow-lg">
                        <i class="fas fa-paper-plane mr-2"></i>
                        Envoyer le message
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection