import {Head, Link} from '@inertiajs/react'
import React, {ReactDOM} from 'react'

interface LayoutProps {
    children: ReactDOM
    title?: string
}

export default function Layout({ children, title = 'Laravel app' }: LayoutProps) {
    return (
        <main>
            <Head title={title} />
            <header>
                <Link href="/">Home</Link>
                <Link href="/about">About</Link>
                <Link href="/contact">Contact</Link>
            </header>
            <div>{children}</div>
        </main>
    )
}
