import { ComponentFixture, TestBed } from '@angular/core/testing';

import { PortfolioModernFour } from './portfolio-modern-four';

describe('PortfolioModernFour', () => {
  let component: PortfolioModernFour;
  let fixture: ComponentFixture<PortfolioModernFour>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [PortfolioModernFour]
    })
    .compileComponents();

    fixture = TestBed.createComponent(PortfolioModernFour);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
