<div class="bg-blue-600 text-white p-4">
    <nav class="flex justify-between">
        <div class="flex space-x-4">
            <a href="/" class="{{ request()->is('/') ? 'bg-blue-500' : '' }} hover:bg-blue-500 px-3 py-2 rounded">Home</a>
            <a href="/servicios" class="{{ request()->is('servicios') ? 'bg-blue-500' : '' }} hover:bg-blue-500 px-3 py-2 rounded">Servicios</a>
            <a href="/proyectos" class="{{ request()->is('proyectos') ? 'bg-blue-500' : '' }} hover:bg-blue-500 px-3 py-2 rounded">Proyectos</a>
            <a href="/clientes" class="{{ request()->is('clientes*') ? 'bg-blue-500' : '' }} hover:bg-blue-500 px-3 py-2 rounded">Clientes</a>
            <a href="/blog" class="{{ request()->is('blog') ? 'bg-blue-500' : '' }} hover:bg-blue-500 px-3 py-2 rounded">Blog</a>
            <a href="/contacto" class="{{ request()->is('contacto') ? 'bg-blue-500' : '' }} hover:bg-blue-500 px-3 py-2 rounded">Contacto</a>
        </div>
    </nav>
</div>
