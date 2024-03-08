import React from 'react';
import '../app/ui/dn_style.css';

interface ButtonProps {
  /**
   * Is this the principal call to action on the page?
   */
  type?: false | 'secondary' | 'line';
  /**
   * What background color to use
   */
  backgroundColor?: string;

  icon?: boolean;
  /**
   * How large should the button be?
   */
  size?: 'sm' | 'md' | 'lg' | 'xl';
  /**
   * Button contents
   */
  label: string;
  /**
   * Optional click handler
   */
  onClick?: () => void;
}

/**
 * Primary UI component for user interaction
 */
export const Button = ({
  type = false,
  size = 'md',
  icon = false,
  backgroundColor,
  label,
  ...props
}: ButtonProps) => {
  const type_str = type ? `btn_${type}` : '';
  const icon_str = icon ? `${type_str} i` : '' ;

  return (
    <button
      type="button"
      className={[`dn_btn_${size}`, type_str, icon_str].join(' ')}
      {...props}
    >
      {icon && <i className={`dn_icon_${size} i_check color_w`}></i>}
      {label}
      <style jsx>{`
        button {
          background-color: ${backgroundColor};
        }
      `}</style>
    </button>
  );
};
