import React from 'react';
// import css

interface ControlProps {
    primary?: boolean;
    backgroundColor?: string;
    size?: 'small' | 'medium' | 'large';
    label: string;
    onClick?: () => void;
}

export const Control = ({
    primary = false,
    size = 'medium',
    backgroundColor,
    label,
    ...props
}: ControlProps) => {
    // logic

    return (
        <>
            {label}
        </>
    )
}