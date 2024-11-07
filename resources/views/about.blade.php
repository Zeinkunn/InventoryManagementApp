@extends('layouts.app')

@section('content')

  <div class="max-w-4xl mx-auto bg-white shadow-lg rounded-lg">
    <!-- Header/Cover Image -->
    <div class="h-48 bg-gradient-to-r from-blue-500 to-purple-600 rounded-t-lg"></div>

    <!-- Profile Section -->
    <div class="px-6 pb-6">
      <!-- Avatar -->
      <div class="relative -mt-24 mb-4">
        <div class="w-40 h-40 rounded-full border-4 border-white overflow-hidden bg-white">
          <img src="{{ asset('Profile.png') }}" alt="Profile" class="w-full h-full object-cover" />
        </div>
      </div>

      <!-- Basic Info -->
      <div class="space-y-2">
        <h1 class="text-3xl font-bold text-gray-900">Zainul Mutawakkil</h1>
        <p class="text-xl text-gray-600">Junior Full Stack Developer</p>
        <div class="flex items-center text-gray-600 space-x-2">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16.24 8.56l2.88-2.88m-9.92 6.76L8.2 10.8m-.22 6.6l1.82-1.82m3.42 0l4.88-4.88m-6.76 9.92L8.56 17.76M19 21H5c-1.1 0-2-.9-2-2V5c0-1.1.9-2 2-2h14c1.1 0 2 .9 2 2v14c0 1.1-.9 2-2 2z"/>
          </svg>
          <span>Cilacap, Jawa Tengah</span>
        </div>
      </div>

      <!-- Social Links -->
      <div class="flex space-x-4 mt-6">
        <a href="https://github.com/Zeinkunn" class="text-gray-600 hover:text-gray-900">
          <i class="fab fa-github"></i>
        </a>
        <a href="#" class="text-gray-600 hover:text-gray-900">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="#" class="text-gray-600 hover:text-gray-900">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="#" class="text-gray-600 hover:text-gray-900">
          <i class="fas fa-globe"></i>
        </a>
        <a href="#" class="text-gray-600 hover:text-gray-900">
          <i class="fas fa-envelope"></i>
        </a>
      </div>

      <!-- Bio -->
      <div class="mt-8">
        <p class="text-gray-700 leading-relaxed">
          Passionate full-stack developer with 2 years of experience building scalable web applications.
          Specialized in React, Node.js, and PHP.
        </p>
      </div>

      <!-- Skills -->
      <div class="mt-8">
        <h2 class="text-xl font-semibold text-gray-900 mb-4">Skills</h2>
        <div class="flex flex-wrap gap-2">
          <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">React</span>
          <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">Node.js</span>
          <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">TypeScript</span>
          <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">Python</span>
          <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">PHP</span>
        </div>
      </div>

      <!-- Projects -->
      <div class="mt-8">
        <h2 class="text-xl font-semibold text-gray-900 mb-4">Featured Projects</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <div class="p-4 bg-gray-50 border rounded-lg">
            <h3 class="font-semibold text-gray-900">E-commerce Platform</h3>
            <p class="text-gray-600 text-sm mt-1">Full-stack e-commerce solution with React and Node.js</p>
            <div class="flex flex-wrap gap-1 mt-2">
              <span class="px-2 py-1 bg-gray-100 text-gray-600 rounded text-xs">React</span>
              <span class="px-2 py-1 bg-gray-100 text-gray-600 rounded text-xs">Node.js</span>
              <span class="px-2 py-1 bg-gray-100 text-gray-600 rounded text-xs">MongoDB</span>
            </div>
          </div>
          <div class="p-4 bg-gray-50 border rounded-lg">
            <h3 class="font-semibold text-gray-900">Task Management App</h3>
            <p class="text-gray-600 text-sm mt-1">Real-time collaborative task management application</p>
            <div class="flex flex-wrap gap-1 mt-2">
              <span class="px-2 py-1 bg-gray-100 text-gray-600 rounded text-xs">PHP</span>
              <span class="px-2 py-1 bg-gray-100 text-gray-600 rounded text-xs">Laravel</span>
              <span class="px-2 py-1 bg-gray-100 text-gray-600 rounded text-xs">mySQL</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
